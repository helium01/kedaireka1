<?php

use App\Http\Controllers\admin\crud\kegiatancontrol;
use App\Http\Controllers\admin\crud\profilcontrol;
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
Route::get('/penghargaan',[profilcontrol::class,'index'])->name('profil');
Route::post('/penghargaan/post',[profilcontrol::class,'inpdatapenghargaan'])->name('postdatapebghargaan');
Route::get('/editpenghargaan/{id}', [profilcontrol::class,'editpenghargaan'])->name('editpenghargaan');
Route::post('/penghargaan/postupdate/{id}',[profilcontrol::class,'updatepenghargaan'])->name('updatepebghargaan');
Route::get('/penghargaan/posthapus/{id}',[profilcontrol::class,'hapuspenghargaan'])->name('hapuspenghargaan');
Route::get('/penghargaan/viewpenghargaan/{id}',[profilcontrol::class,'viewpenghargaan'])->name('viewpenghargaan');

// route untuk susunan pengurus
Route::get('/susunan_pengurus',[profilcontrol::class,'index'])->name('profil');
Route::post('/susunan_pengurus/post',[profilcontrol::class,'inpdatasusunan_pengurus'])->name('postdatasusunan_pengurus');
Route::get('/editsusunan_pengurus/{id}', [profilcontrol::class,'editsusunan_pengurus'])->name('editsusunan_pengurus');
Route::post('/susunan_pengurus/postupdate/{id}',[profilcontrol::class,'updatesusunan_pengurus'])->name('updatesusunan_pengurus');
Route::get('/susunan_pengurus/posthapus/{id}',[profilcontrol::class,'hapussusunan_pengurus'])->name('hapussusunan_pengurus');
Route::get('/susunan_pengurus/viewpenghargaan/{id}',[profilcontrol::class,'viewsusunan_pengurus'])->name('viewsusunan_pengurus');
