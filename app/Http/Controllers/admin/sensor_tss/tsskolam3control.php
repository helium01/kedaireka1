<?php

namespace App\Http\Controllers\admin\sensor_tss;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tsskolam3control extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.sensor_tss.tss_kolam3');
    }
}
