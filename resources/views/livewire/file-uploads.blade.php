<div> 
@section('title', 'ESD LAB | Upload File')

@section('content')
<section class="content">    
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Upload Berkas Pendaftaran</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form wire:submit.prevent="fileUpload" id="form-upload" enctype="multipart/form-data">                        
                        <div class="card-body">                                        
                            <div class="form-group">
                                <label for="exampleInputFile">Curriculum Vitae</label>                                
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="file_CV" wire:model="file_CV">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    @error('file_CV') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>                                                                    
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Kartu Studi Mahasiswa</label>                                
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="file_KSM" wire:model="file_KSM">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    @error('file_KSM') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>                                                                    
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Motivation Letter</label>                                
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="file_ML" wire:model="file_ML">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    @error('file_ML') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>                                                                    
                            </div>    
                            <div class="form-group">
                                <label for="exampleInputFile">Personalities Test</label>                                
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="file_Personalities" wire:model="file_Personalities">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    @error('file_Personalities') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>                                                                    
                            </div>        
                        </div>                                                   
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>                                    
                    </div>                  
                </div>
    <!-- /.card -->
            </div>
        </div>
    </div> 
</section>
@endsection
</div>
