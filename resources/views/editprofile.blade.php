@extends('layouts.main')

@section('title', 'ESD LAB | Edit Profile')
@section('page-name', 'Edit Profile')
@section('breadcrumb', 'My Profile')
@section('new-breadcrumb')
<li class="breadcrumb-item active">Edit Profile</li>   
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">              
                <div class="card-body">
                    <div class="tab-content">                                                                   
                        <form action="{{ url('update-profile/'.$item->id) }}" method="post" class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                            <div class="form-group row">
                                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nim" value="{{ $item->nim }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_lengkap" value="{{ $item->nama_lengkap }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                <select name="kelas" id="kelas" class="form-control">
                                    <option value="{{ $item->kelas }}">{{ $item->kelas }}</option>
                                    <option value="SI-43-01">SI-43-01</option>
                                    <option value="SI-43-02">SI-43-02</option>
                                    <option value="SI-43-03">SI-43-03</option>
                                    <option value="SI-43-04">SI-43-04</option>
                                    <option value="SI-43-05">SI-43-05</option>
                                    <option value="SI-43-06">SI-43-06</option>
                                    <option value="SI-43-07">SI-43-07</option>
                                    <option value="SI-43-08">SI-43-08</option>
                                    <option value="SI-43-09">SI-43-09</option>
                                    <option value="SI-43-INT">SI-43-INT</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <select name="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                    <option value="{{ $item->jenis_kelamin }}">{{ $item->jenis_kelamin }}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                </div>
                            </div>              
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{ $item->email }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" name="nomor_telepon" value="{{ $item->nomor_telepon }}">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-warning">Perbarui</button>                                                                        
                                    <a href="{{ route('my-profile') }}" class="btn btn-danger"> Kembali</a>
                                </div>
                            </div>                           
                        </form>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection