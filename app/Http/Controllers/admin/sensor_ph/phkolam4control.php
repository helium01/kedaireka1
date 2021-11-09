<?php

namespace App\Http\Controllers\admin\sensor_ph;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class phkolam4control extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view("admin.sesnor_ph.ph_kolam4");
    }
}
