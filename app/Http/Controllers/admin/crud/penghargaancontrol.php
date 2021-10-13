<?php

namespace App\Http\Controllers\admin\crud;

use App\Http\Controllers\Controller;
use App\Models\admin\crud\penghargaan;
use Illuminate\Http\Request;

class penghargaancontrol extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $penghargaan = penghargaan::latest()->paginate(5);
        return view('admin.crud.penghargaan',['penghargaan'=>$penghargaan])->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function viewpenghargaan($id){
        $penghargaan = penghargaan::find($id);
        return view('admin.view_crud.view_penghargaan',['k'=>$penghargaan]);

    }
    public function inpdatapenghargaan(Request $request){
// dd($request);

        $request->validate([
            'foto' => 'required',
            'tanggal_penghargaan' => 'required',
            'penghargaan_dari' => 'required',
            'deskripsi_penghargaan' => 'required',
        ]);


        $penghargaan=penghargaan::create($request->all());
        if($request->hasFile('foto')){

            $request->file('foto')->move('admin/pegawai/', $request->file('foto')->getClientOriginalName());
            $penghargaan->foto =$request->file('foto')->getClientOriginalName();
            $penghargaan->save();
        }
        return redirect()->route('penghargaan')->with('sukses','data berhasil di tambahkan');
    }

    public function editpenghargaan($id)
    {
        $penghargaan=penghargaan::find($id);
        return view('admin.crud.editpenghargaan',['k'=>$penghargaan]);
    }

    public function updatepenghargaan(Request $request, $id)
    {

        // dd($id);
        // $request->validate([
        //     'foto' => 'required',
        //     'tanggal_penghargaan' => 'required',
        //     'penghargaan_dari' => 'required',
        //     'deskripsi_penghargaan' => 'required',
        // ]);

        $id=penghargaan::find($id);
        $id->penghargaan_dari = $request->penghargaan_dari;
        $id->tanggal_penghargaan = $request->tanggal_penghargaan;
        $id->deskripsi_penghargaan = $request->deskripsi_penghargaan;
        if($request->hasFile('foto')){
            $id->delete_image();
            $request->file('foto')->move('admin/pegawai/', $request->file('foto')->getClientOriginalName());
            $id->foto =$request->file('foto')->getClientOriginalName();
        }else{
            unset($id['foto']);
        }
        $id->save();
        return redirect()->route('penghargaan')->with('sukses','data berhasil di edit');
    }

    public function hapuspenghargaan($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $id=penghargaan::find($id);
        $id->delete();

        return redirect()->route('penghargaan')
                        ->with('sukses','data berhasil di hapus');
    }
}
