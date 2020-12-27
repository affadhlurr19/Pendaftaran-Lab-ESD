@extends('layouts.main')

@section('title', 'ESD LAB | Upload File')
@section('page-name', 'Upload')
@section('breadcrumb', 'upload')

@section('content')   
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">                                                                                
                <form method="post" action="{{ route('save-file') }}" enctype="multipart/form-data">  
                    @csrf
                    <div class="card-body">    
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                {{ session('success') }}
                            </div>                                                            
                        @endif                        
                        <div class="form-group">
                            <label for="CV">File Curriculum Vitae</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="file_CV">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('file_CV')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>      
                        <div class="form-group">
                            <label for="CV">File Kartu Studi Mahasiswa</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="file_KSM">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('file_KSM')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="CV">File Motivation Letter</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="file_ML">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('file_ML')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="CV">File Test Personalities</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="file_Personalities">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('file_Personalities')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>                                               
                    </div>
                    <input type="text" name="id_user" value="{{ $user->id }}" hidden>                                                      
                    <div class="card-footer">                         
                        <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>                                   
                    </div>    
                </form>               
            </div>  
        </div>         
    </div>   
</div>          
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endsection