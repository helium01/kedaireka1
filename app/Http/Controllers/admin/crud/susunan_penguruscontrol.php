<?php

namespace App\Http\Controllers\admin\crud;

use App\Http\Controllers\Controller;
use App\Models\admin\crud\susunan_pengurus;
use Illuminate\Http\Request;

class susunan_penguruscontrol extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $susunan_pengurus = susunan_pengurus::latest()->paginate(5);
        return view('admin.crud.susunan_pengurus',['susunan_pengurus'=>$susunan_pengurus])->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function viewsusunan_pengurus($id){
        $susunan_pengurus = susunan_pengurus::find($id);
        return view('admin.view_crud.view_susunan_pengurus',['k'=>$susunan_pengurus]);

    }
    public function inpdataprofil(Request $request){
// dd($request);

        $request->validate([
            'nama' => 'required',
            'kelamin' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'foto' => 'required',
        ]);


        $susunan_pengurus=susunan_pengurus::create($request->all());
        if($request->hasFile('foto')){

            $request->file('foto')->move('admin/pegawai/', $request->file('foto')->getClientOriginalName());
            $susunan_pengurus->foto =$request->file('foto')->getClientOriginalName();
            $susunan_pengurus->save();
        }
        return redirect()->route('susunan_pengurus')->with('sukses','data berhasil di tambahkan');
    }

    public function editsusunan_pengurus($id)
    {
        $susunan_pengurus=susunan_pengurus::find($id);
        return view('admin.crud.editsusunan_pengurus',['k'=>$susunan_pengurus]);
    }

    public function updatesusunan_pengurus(Request $request, $id)
    {

        // dd($id);
        $request->validate([
            'nama' => 'required',
            'kelamin' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'foto' => 'required',
        ]);
        $id=susunan_pengurus::find($id);
        $id->nama = $request->nama;
        $id->kelamin = $request->kelamin;
        $id->ttl = $request->ttl;
        $id->jabatan = $request->jabatan;
        $id->alamat = $request->alamat;
        if($request->hasFile('foto')){
            $id->delete_image();
            $request->file('foto')->move('admin/pegawai/', $request->file('foto')->getClientOriginalName());
            $id->foto =$request->file('foto')->getClientOriginalName();
        }else{
            unset($id['foto']);
        }
        $id->save();
        return redirect()->route('susunan_pengurus')->with('sukses','data berhasil di edit');
    }

    public function hapussusunan_pengurus($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $id=susunan_pengurus::find($id);
        $id->delete();

        return redirect()->route('susunan_pengurus')
                        ->with('sukses','data berhasil di hapus');
    }
}
