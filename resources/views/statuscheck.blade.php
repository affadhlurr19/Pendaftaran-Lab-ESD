@extends('layouts.main')

@section('title', 'ESD LAB | Status Check')
@section('page-name', 'Status Check')
@section('breadcrumb', 'Status Check')

@section('content') 
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="timeline">              
                <div class="time-label">
                    <span class="bg-dark">Timeline</span>
                </div>                     
                @if($item->status == "")     
                <div>
                    <i class="fa fa-upload bg-gray"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Silahkan upload berkas anda terlebih dahulu pada menu registration.</h3>
                    </div>
                </div>                                 
                @elseif($item->status == "Sedang Diproses")
                <div>
                    <i class="fa fa-upload bg-gray"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Silahkan upload berkas anda terlebih dahulu pada menu registration.</h3>
                    </div>
                </div>
                <div>
                    <i class="fas fa-clock bg-primary"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Berkas anda sedang diproses. Mohon tunggu informasi selanjutnya.</h3>
                    </div>
                </div>
                @elseif($item->status == "Diterima")
                <div>
                    <i class="fa fa-upload bg-gray"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Silahkan upload berkas anda terlebih dahulu pada menu registration.</h3>
                    </div>
                </div>
                <div>
                    <i class="fas fa-clock bg-primary"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Berkas anda sedang diproses. Mohon tunggu informasi selanjutnya.</h3>
                    </div>
                </div>
                <div>
                    <i class="fa fa-check bg-success"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Selamat, Anda diterima menjadi anggota Lab Riset ESD !</h3>
                    </div>
                </div>      
                <div class="time-label">
                    <span class="bg-dark">Selesai</span>
                </div>                            
                @elseif($item->status == "Tidak Diterima")
                <div>
                    <i class="fa fa-upload bg-gray"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Silahkan upload berkas anda terlebih dahulu pada menu registration.</h3>
                    </div>
                </div>
                <div>
                    <i class="fas fa-clock bg-primary"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Berkas anda sedang diproses. Mohon tunggu informasi selanjutnya.</h3>
                    </div>
                </div>                                 
                <div>
                    <i class="fa fa-times bg-danger"></i>
                    <div class="timeline-item">                        
                        <h3 class="timeline-header no-border">Mohon maaf, Anda tidak diterima menjadi anggota Lab Riset ESD ! Tetap semangat dan mencoba lagi.</h3>
                    </div>
                </div>  
                <div class="time-label">
                    <span class="bg-dark">Selesai</span>
                </div>  
                @endif                                                                                 
            </div>
        </div>
    </div>
</div>
@endsection