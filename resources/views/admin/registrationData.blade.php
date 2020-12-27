@extends('layouts.main')

@section('title', 'ESD LAB | Registration Data')
@section('page-name', 'Registration Data')
@section('breadcrumb', 'Registration Data')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">                
                <div class="card-body">     
                @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    {{ session('success') }}
                </div>                                                            
                @endif        
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Lengkap</th>
                                <th>Berkas CV</th>
                                <th>Berkas KSM</th>
                                <th>Berkas Motivation Letter</th>
                                <th>Berkas Test Personalities</th>
                                <th>Status</th>
                                <th style="padding-right:135px;">Action</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($item as $items)                            
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>{{ $items->nim }}</td>
                                <td>{{ $items->nama_lengkap }}</td>
                                <td><a href="{{ url('admin/download-file-CV/'. $items->id_upload) }}">{{ $items->file_CV }}</a></td>
                                <td><a href="{{ url('admin/download-file-KSM/'. $items->id_upload) }}">{{ $items->file_KSM }}</a></td>
                                <td><a href="{{ url('admin/download-file-ML/'. $items->id_upload) }}">{{ $items->file_ML }}</a></td>
                                <td><a href="{{ url('admin/download-file-Personalities/'. $items->id_upload) }}">{{ $items->file_Personalities }}</a></td>                                                              
                                <td>
                                    @if($items->status == "Sedang Diproses")
                                    <form method="post" action="{{ url('admin/user-accepted/'.$items->user_id) }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $items->user_id }}">
                                        <input type="hidden" name="status" value="Diterima">
                                        <button type="submit" class="btn btn-success">Terima</button>                                
                                    </form>      
                                    <form method="post" action="{{ url('admin/user-rejected/'.$items->user_id) }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $items->user_id }}">
                                        <input type="hidden" name="status" value="Tidak Diterima">
                                        <button type="submit" class="btn btn-danger" style="width:130px;">Tidak Diterima</button>                                
                                    </form>
                                    @elseif($items->status == "Diterima")
                                    {{ $items->status }}
                                    @else
                                    {{ $items->status }}
                                    @endif
                                </td>                                
                                <td>                                    
                                    <!-- <a href="{{ url('admin/download-registartion-data/'. $items->id_upload) }}" class="btn btn-dark"> Download</a> -->
                                    <form method="post" action="{{ url('admin/delete-registration-data/'.$items->id_upload) }}">
                                    @csrf
                                    @method('delete')
                                        <input type="hidden" name="id" value="{{ $items->user_id }}">
                                        <input type="hidden" name="status" value="Tidak Diterima">
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    <!-- <a href="{{ url('admin/delete-registration-data/'.$items->id_upload) }}" class="btn btn-danger">Hapus</a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>                    
                    </table>
                </div>                                                            
            </div>    
        </div>
    </div>
</div>     
@endsection