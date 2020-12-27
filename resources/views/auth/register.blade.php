@extends('layouts.authTemplate')

@section('title', 'ESD LAB | Register')

@section('content')
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b>ESD</b>LAB</a>
            </div>
            <div class="card-body">                
                <form method="post" action="{{ route('register') }}">
                @csrf
                    <div class="input-group mb-3">
                    <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus placeholder="NIM">                    
                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-id-card"></span>                                
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                    <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus placeholder="Nama Lengkap">
                    @error('nama_lengkap')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-file-signature"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select name="kelas" class="custom-select">
                            <option selected>Kelas</option>
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
                        @error('kelas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki" required autocomplete="jenis_kelamin" autofocus checked>
                            </div>
                        </div>
                        <input type="text" class="form-control" value="Laki-Laki" style="width:15%;" readonly>
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="jenis_kelamin" value="Perempuan" required autocomplete="jenis_kelamin" autofocus>
                            </div>
                        </div>
                        <input type="text" class="form-control" value="Perempuan" style="width:25%;" readonly>
                        @error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                    <input id="nomor_telepon" type="number" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required autocomplete="nomor_telepon" autofocus placeholder="Nomor Telepon">
                    @error('nomor_telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone-alt"></span>
                            </div>
                        </div>
                    </div>                                                                                    
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>                    
                </form>   
                <p class="mb-0">             
                    <a href="{{ route('login') }}" class="text-center">Login Here</a>
                </p>    
            </div>
        </div>
    </div>    

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
@endsection
