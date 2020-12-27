<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Upload;
use App\Models\User;
use Session;


class FileUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createFileUpload()
    {
        return view('create', array('user' => Auth::user()));
    }

    public function saveFileUpload(Request $request)
    {
        $validateData = $request->validate([
            'file_CV' => 'required|file|mimes:pdf',
            'file_KSM' => 'required|file|mimes:pdf', 
            'file_ML' => 'required|file|mimes:pdf',
            'file_Personalities' => 'required|file|mimes:pdf'
        ]);

        $uploaded_CV = $request->file('file_CV');
        $path_CV = $uploaded_CV->store('public/document');
        $uploaded_KSM = $request->file('file_KSM');
        $path_KSM = $uploaded_KSM->store('public/document');
        $uploaded_ML = $request->file('file_ML');
        $path_ML = $uploaded_ML->store('public/document');
        $uploaded_Personalities = $request->file('file_Personalities');
        $path_Personalities = $uploaded_Personalities->store('public/document');

        $file = Upload::create([    
            'id_user' => $request->id_user,     
            'file_CV' => $request->file_CV->getClientOriginalName(),
            'path_CV' => $path_CV,
            'file_KSM' => $request->file_KSM->getClientOriginalName(),
            'path_KSM' => $path_KSM,
            'file_ML' => $request->file_ML->getClientOriginalName(),
            'path_ML' => $path_ML,
            'file_Personalities' => $request->file_Personalities->getClientOriginalName(),
            'path_Personalities' => $path_Personalities,            
            'extensi_file' => $request->file_CV->getClientOriginalExtension()            
        ]);     
        
        $file2 = DB::table('users')
                    ->where('id', $request->id_user)
                    ->update(['status' => "Sedang Diproses"]);
                
        return redirect('upload-file')->with('success', 'Data Berhasil Ditambahkan');
    }
}
