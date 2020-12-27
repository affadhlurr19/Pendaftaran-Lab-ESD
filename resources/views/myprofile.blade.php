@extends('layouts.main')

@section('title', 'ESD LAB | My Profile')
@section('page-name', 'My Profile')
@section('breadcrumb', 'My Profile')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                src="{{ asset('files/User.png') }}"
                alt="User profile picture">
          </div>
          <h3 class="profile-username text-center">{{ $item->nama_lengkap }}</h3>
          <p class="text-muted text-center">Mahasiswa</p>
          <ul class="list-group list-group-unbordered mb-3">                    
            <li class="list-group-item">
              <a href="{{ url('edit-profile/'.$item->id) }}" class="btn btn-warning btn-block"><b>Edit Profile</b></a>
            </li>
          </ul>                    
        </div>              
      </div>                                    
    </div>
    <div class="col-md-9">
      <div class="card card-primary card-outline">              
        <div class="card-body">
        @if (session('success'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{ session('success') }}
          </div>                                                            
        @endif                                                                                     
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nim" value="{{ $item->nim }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_lengkap" value="{{ $item->nama_lengkap }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                  <select name="kelas" id="kelas" class="form-control" readonly>
                    <option value="{{ $item->kelas }}">{{ $item->kelas }}</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" readonly>
                    <option value="{{ $item->jenis_kelamin }}">{{ $item->jenis_kelamin }}</option>
                  </select>
                </div>
              </div>              
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" value="{{ $item->email }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="nomor_telepon" value="{{ $item->nomor_telepon }}" readonly>
                </div>
              </div>                            
            </form>                                              
        </div>
      </div>
    </div>
  </div>
</div>
@endsection