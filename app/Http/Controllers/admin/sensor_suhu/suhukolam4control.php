<?php

namespace App\Http\Controllers\admin\sensor_suhu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class suhukolam4control extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.sensor_suhu.suhu_kolam4');
    }
}

