<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Upload;
use App\Models\User;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }


    public function userData()
    {
        $item = DB::table('users')
                ->select('*')  
                ->where('users.isAdmin')                              
                ->get(); 

        return view('admin.userData', compact('item'));
    }

    public function deleteUser($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('admin/user-data')->with('success', 'Data Berhasil Dihapus');
    }

    public function registrationData()
    {
        $item = DB::table('uploadfile')
                ->select('*', 'uploadfile.id as id_upload', 'users.id as user_id')  
                ->join('users','uploadfile.id_user', '=', 'users.id')
                ->get(); 

        return view('admin.registrationData', compact('item'));
    }    

    public function userAccepted(Request $request)
    {
        $data = User::find($request->user_id);
        $data->status = $request->status;
        $data->save();

        return redirect('admin/registration-data')->with('success', 'Status Berhasil Diubah Menjadi Diterima');
    }

    public function userRejected(Request $request)
    {
        $data = User::find($request->user_id);
        $data->status = $request->status;
        $data->save();

        return redirect('admin/registration-data')->with('success', 'Status Berhasil Diubah Menjadi Tidak Diterima');
    }
    
    public function deleteRegistrationData($id_upload, Request $request)
    {           
        $data2= Upload::find($request->id_upload);        
        $data2->delete();                        

        return redirect('admin/registration-data')->with('success', 'Data Berhasil Dihapus');
    }

    public function downloadRegistrationData($id_upload)
    {        
        $uploads = Upload::where('id',$id_upload)->get();

        $headers = ["Content-Type"=>"application/zip"];
        $fileName = "docs.zip"; // name of zip
        foreach($uploads as $upload) {
        \Madzipper::make(storage_path('/app/public/downloads/'.$id_upload.'.zip')) //file path for zip file

                ->add(storage_path()."/app/public/downloads/".$id_upload.'/')->close(); //files to be zipped
              }
        return response()
        ->download(public_path($fileName),$fileName, $headers);
    }

    public function downloadFileCV($id_upload)
    {
        $data = Upload::find($id_upload);
        return Storage::download($data->path_CV, $data->file_CV);
    }

    public function downloadFileKSM($id_upload)
    {
        $data = Upload::find($id_upload);
        return Storage::download($data->path_KSM, $data->file_KSM);
    }

    public function downloadFileML($id_upload)
    {
        $data = Upload::find($id_upload);
        return Storage::download($data->path_ML, $data->file_ML);
    }

    public function downloadFilePersonalities($id_upload)
    {
        $data = Upload::find($id_upload);
        return Storage::download($data->path_Personalities, $data->file_Personalities);
    }

}
