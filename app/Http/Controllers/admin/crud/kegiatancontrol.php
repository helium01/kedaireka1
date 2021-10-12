<?php

namespace App\Http\Controllers\admin\crud;

use App\Http\Controllers\Controller;
use App\Models\admin\crud\kegiatan;
use Illuminate\Http\Request;

class kegiatancontrol extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $kegiatan = kegiatan::latest()->paginate(5);
        return view('admin.crud.kegiatan',['kegiatan'=>$kegiatan])->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function viewkegiatan($id){
        $kegiatan = kegiatan::find($id);
        return view('admin.view_crud.view_kegiatan',['k'=>$kegiatan]);

    }
    public function inpdataprofil(Request $request){
// dd($request);

        $request->validate([
            'nama_kegiatan' => 'required',
            'jenis_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'foto' => 'required',
        ]);


        $kegiatan=kegiatan::create($request->all());
        if($request->hasFile('foto')){

            $request->file('foto')->move('admin/pegawai/', $request->file('foto')->getClientOriginalName());
            $kegiatan->foto =$request->file('foto')->getClientOriginalName();
            $kegiatan->save();
        }
        return redirect()->route('kegiatan')->with('sukses','data berhasil di tambahkan');
    }

    public function editkegiatan($id)
    {
        $kegiatan=kegiatan::find($id);
        return view('admin.crud.editkegiatan',['k'=>$kegiatan]);
    }

    public function updatekegiatan(Request $request, $id)
    {

        // dd($id);
        $request->validate([
            'nama_kegiatan' => 'required',
            'jenis_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
        ]);
        $id=kegiatan::find($id);
        $id->nama_kegiatan = $request->nama_kegiatan;
        $id->jenis_kegiatan = $request->jenis_kegiatan;
        $id->tanggal_kegiatan = $request->tanggal_kegiatan;
        $id->deskripsi_kegiatan = $request->deskripsi_kegiatan;
        if($request->hasFile('foto')){
            $id->delete_image();
            $request->file('foto')->move('admin/pegawai/', $request->file('foto')->getClientOriginalName());
            $id->foto =$request->file('foto')->getClientOriginalName();
        }else{
            unset($id['foto']);
        }
        $id->save();
        return redirect()->route('kegiatan')->with('sukses','data berhasil di edit');
    }

    public function hapuskegiatan($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $id=kegiatan::find($id);
        $id->delete();

        return redirect()->route('kegiatan')
                        ->with('sukses','data berhasil di hapus');
    }
}
