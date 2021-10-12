<?php

namespace App\Http\Controllers\admin\crud;

use App\Http\Controllers\Controller;
use App\Models\admin\crud\profil;
use Illuminate\Http\Request;

class profilcontrol extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $profil = profil::latest()->paginate(5);
        return view('admin.crud.profil',['profil'=>$profil])->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function viewprofil($id){
        $profil = profil::find($id);
        return view('admin.view_crud.view_profil',['k'=>$profil]);

    }
    public function inpdataprofil(Request $request){
        // dd($request);
        $request->validate([
            'profil_tirtarona' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'akun_fb' => 'required',
            'akun_twitter' => 'required',
            'akun_whatsapp' => 'required',
            'akun_instagram' => 'required',
        ]);
        $profil=profil::create($request->all());
        $profil->save();


        return redirect()->route('profil')->with('sukses','data berhasil di tambahkan');
    }

    public function editprofil($id)
    {
        $profil=profil::find($id);
        return view('admin.crud.editprofil',['k'=>$profil]);
    }

    public function updateprofil(Request $request, $id)
    {

        // dd($id);
        $request->validate([
            'profil_tirtarona' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'akun_fb' => 'required',
            'akun_twitter' => 'required',
            'akun_whatsapp' => 'required',
            'akun_instagram' => 'required',
        ]);
        $id=profil::find($id);
        $id->update($request->all());
        return redirect()->route('profil')->with('sukses','data berhasil di edit');
    }

    public function hapusprofil($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $id=profil::find($id);
        $id->delete();

        return redirect()->route('profil')
                        ->with('sukses','data berhasil di hapus');
    }
}
