<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\Upload;
use Livewire\WithFileUploads;

class FileUploads extends Component
{
    public $file_CV;
    public $file_KSM;
    public $file_ML;
    public $file_Personalities;

    use WithFileUploads;
    public function fileUpload()    
    {
        $validateData = $this->validate([
            'file_CV' => 'required',
            'file_KSM' => 'required',
            'file_ML' => 'required',
            'file_Personalities' => 'required'
        ]);

        $filename = $this->filename->store('files', 'public');
        $validateData['file_CV'] = $filename;
        Upload::create($validateData);
        session()->flash('message', 'File Berhasil Ditambahkan !');
        $this->emit('fileUploaded');
        
    }

    public function render()
    {
        return view('livewire.file-uploads')
            ->layout('layouts.main');
    }
}
