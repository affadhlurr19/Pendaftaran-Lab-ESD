@extends('layouts.main')

@section('title', 'ESD LAB | User Data')
@section('page-name', 'User Data')
@section('breadcrumb', 'User Data')

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
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($item as $items)                            
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>{{ $items->nim }}</td>
                                <td>{{ $items->nama_lengkap }}</td>
                                <td>{{ $items->kelas }}</td>
                                <td>{{ $items->jenis_kelamin }}</td>
                                <td>{{ $items->email }}</td>
                                <td>{{ $items->nomor_telepon }}</td>                                    
                                <td>{{ $items->status }}</td>
                                <td><a href="{{ url('admin/delete-user/'.$items->id) }}" class="btn btn-danger">Hapus</a></td>
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