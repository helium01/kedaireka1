<?php

use App\Http\Controllers\admin\crud\kegiatancontrol;
use App\Http\Controllers\admin\crud\profilcontrol;
use App\Http\Controllers\admin\crud\penghargaancontrol;
use App\Http\Controllers\admin\crud\susunan_penguruscontrol;
use App\Http\Controllers\admin\sensor_do\dokolam1control;
use App\Http\Controllers\admin\sensor_ph\phkolam1control;
use App\Http\Controllers\admin\sensor_ph\phkolam2control;
use App\Http\Controllers\admin\sensor_ph\phkolam3control;
use App\Http\Controllers\admin\sensor_ph\phkolam4control;
use App\Http\Controllers\admin\sensor_suhu\suhukolam1control;
use App\Http\Controllers\admin\sensor_suhu\suhukolam2control;
use App\Http\Controllers\admin\sensor_suhu\suhukolam3control;
use App\Http\Controllers\admin\sensor_suhu\suhukolam4control;
use App\Http\Controllers\admin\sensor_tss\tsskolam1control;
use App\Http\Controllers\admin\sensor_tss\tsskolam2control;
use App\Http\Controllers\admin\sensor_tss\tsskolam3control;
use App\Http\Controllers\admin\sensor_tss\tsskolam4control;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/coba', function () {
//     return view('admin.home.home');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route untuk kegiatan
Route::get('/kegiatan',[kegiatancontrol::class,'index'])->name('kegiatan');
Route::post('/kegiatan/post',[kegiatancontrol::class,'inpdata'])->name('postdata');
Route::get('/editkegiatan/{id}', [kegiatancontrol::class,'editkegiatan'])->name('editkegiatan');
Route::post('/kegiatan/postupdate/{id}',[kegiatancontrol::class,'updatekegiatan'])->name('updatedata');
Route::get('/kegiatan/posthapus/{id}',[kegiatancontrol::class,'hapuskegiatan'])->name('hapuskegiatan');
Route::get('/kegiatan/viewkegiatan/{id}',[kegiatancontrol::class,'viewkegiatan'])->name('viewkegiatan');

// route untuk profil
Route::get('/profil',[profilcontrol::class,'index'])->name('profil');
Route::post('/profil/post',[profilcontrol::class,'inpdataprofil'])->name('postdataprofil');
Route::get('/editprofil/{id}', [profilcontrol::class,'editprofil'])->name('editprofil');
Route::post('/profil/postupdate/{id}',[profilcontrol::class,'updateprofil'])->name('updateprofil');
Route::get('/profil/posthapus/{id}',[profilcontrol::class,'hapusprofil'])->name('hapusprofil');
Route::get('/profil/viewkegiatan/{id}',[profilcontrol::class,'viewprofil'])->name('viewprofil');

// route untuk penghargaan
Route::get('/penghargaan',[penghargaancontrol::class,'index'])->name('penghargaan');
Route::post('/penghargaan/post',[penghargaancontrol::class,'inpdatapenghargaan'])->name('postdatapenghargaan');
Route::get('/editpenghargaan/{id}', [penghargaancontrol::class,'editpenghargaan'])->name('editpenghargaan');
Route::post('/penghargaan/postupdate/{id}',[penghargaancontrol::class,'updatepenghargaan'])->name('updatepenghargaan');
Route::get('/penghargaan/posthapus/{id}',[penghargaancontrol::class,'hapuspenghargaan'])->name('hapuspenghargaan');
Route::get('/penghargaan/viewpenghargaan/{id}',[penghargaancontrol::class,'viewpenghargaan'])->name('viewpenghargaan');

// route untuk susunan pengurus
Route::get('/susunan_pengurus',[susunan_penguruscontrol::class,'index'])->name('susunan_pengurus');
Route::post('/susunan_pengurus/post',[susunan_penguruscontrol::class,'inpdatasusunan_pengurus'])->name('postdatasusunan_pengurus');
Route::get('/editsusunan_pengurus/{id}', [susunan_penguruscontrol::class,'editsusunan_pengurus'])->name('editsusunan_pengurus');
Route::post('/susunan_pengurus/postupdate/{id}',[susunan_penguruscontrol::class,'updatesusunan_pengurus'])->name('updatesusunan_pengurus');
Route::get('/susunan_pengurus/posthapus/{id}',[susunan_penguruscontrol::class,'hapussusunan_pengurus'])->name('hapussusunan_pengurus');
Route::get('/susunan_pengurus/viewpenghargaan/{id}',[susunan_penguruscontrol::class,'viewsusunan_pengurus'])->name('viewsusunan_pengurus');

// route untuk ph semua kolam
Route::get('/ph_kolam1', [phkolam1control::class,"index"])->name('phk1');
Route::get('/ph_kolam2', [phkolam2control::class,"index"])->name('phk2');
Route::get('/ph_kolam3', [phkolam3control::class,"index"])->name('phk3');
Route::get('/ph_kolam4', [phkolam4control::class,"index"])->name('phk4');

// route untuk ph semua kolam
Route::get('/suhu_kolam1', [suhukolam1control::class,"index"])->name('suhuk1');
Route::get('/suhu_kolam2', [suhukolam2control::class,"index"])->name('suhuk2');
Route::get('/suhu_kolam3', [suhukolam3control::class,"index"])->name('suhuk3');
Route::get('/suhu_kolam4', [suhukolam4control::class,"index"])->name('suhuk4');

// route untuk ph semua kolam
Route::get('/tss_kolam1', [tsskolam1control::class,"index"])->name('tssk1');
Route::get('/tss_kolam2', [tsskolam2control::class,"index"])->name('tssk2');
Route::get('/tss_kolam3', [tsskolam3control::class,"index"])->name('tssk3');
Route::get('/tss_kolam4', [tsskolam4control::class,"index"])->name('tssk4');

// route untuk sensor do
route::get('/sensor_do',[dokolam1control::class,'index'])->name('dosensor');

// tes peta
route::get('/peta',[HomeController::class,'peta'])->name('peta');

// tes date time
route::post('/post/date',[phkolam1control::class,'index2']);


// TES CETAK
route::get('/cetakph',[phkolam1control::class,'cetak'])->name('cetak');
