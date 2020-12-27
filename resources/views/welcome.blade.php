@extends('layouts.app')

@section('title', 'ESD LAB')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">            
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">                
                            <img src="{{ asset('files/Image1.png') }}" class="mx-auto d-block img-fluid" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">              
                    <div class="card-body">
                        <h1><center>WELCOME TO LABORATORIUM RISET ENTERPRISE SYSTEM DEVELOPMENT</center></h1>     
                        <br>
                        <p class="text-justify" style="font-size:19.5px;">
                            Laboratorium Enterprise System Development adalah aboratorium riset yang berada dibawah 
                            naungan KK EISD (Enterprise Inteligence System Development) yang lebih berfokus pada pengembangan 
                            aplikasi dan perangkat lunak.
                        </p>
                        <br>
                        <a href="{{ route('register') }}" class="btn btn-block btn-primary">Join With Us Now</a>                         
                    </div>
                </div>  
            </div>                                    
        </div>   
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><center>STUDY GROUP</center></h3>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">              
                    <div class="card-body" style="height:410px;">
                        <img src="{{ asset('files/Image8.jpg') }}" class="mx-auto d-block img-fluid" width=100% >
                        <button type="button" class="btn btn-block btn-danger">SOFTWARE DEVELOPMENT</button>
                    </div>
                </div> 
            </div>
            <div class="col-4">
                <div class="card">              
                    <div class="card-body" style="height:410px;">
                        <img src="{{ asset('files/Image5.png') }}" class="mx-auto d-block img-fluid" width=100% > 
                        <br>
                        <button type="button" class="btn btn-block btn-info">UI/UX DESIGN</button>                        
                    </div>
                </div> 
            </div>
            <div class="col-4">
                <div class="card">              
                    <div class="card-body" style="height:410px;">
                        <img src="{{ asset('files/Image9.png') }}" class="mx-auto d-block img-fluid" width=100%>                                                                          
                        <br><br><br><br>
                        <button type="button" class="btn btn-block btn-dark">TECHNOPRENEUR</button>                        
                    </div>
                </div> 
            </div>
        </div> 
    </div>
</div>
@endsection