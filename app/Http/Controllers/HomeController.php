<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Upload;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function statusCheck()
    {   
        
        $item = DB::table('users')
                ->select('status')                
                ->where('users.id', Auth::user()->id)
                ->first();            

        return view('statuscheck', compact('item'));
    }

    public function myProfile()
    {
        $item = DB::table('users')
                ->select('*')                
                ->where('users.id', Auth::user()->id)
                ->first();            
        
        return view('myprofile', compact('item'));
    }

    public function editProfile($id)
    {
        $item = User::find($id);
        return view('editprofile', ['item'=>$item]);
    }
    
    public function updateProfile(Request $request)
    {
        $data = User::find($request->id);
        $data->nim = $request->nim;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->kelas = $request->kelas;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->email = $request->email;
        $data->nomor_telepon = $request->nomor_telepon;
        $data->save();

        return redirect('my-profile')->with('success', 'Data Berhasil Diubah');
    }
}
