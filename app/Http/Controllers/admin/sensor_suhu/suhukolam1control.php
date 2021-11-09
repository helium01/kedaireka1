<?php

namespace App\Http\Controllers\admin\sensor_suhu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class suhukolam1control extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $sensor=HTTP::GET('https://api.thingspeak.com/channels/1548591/fields/2.json?api_key=VL32957PDVO254CZ');
        $json = json_decode($sensor, TRUE);
        $data=($json['feeds']);
        return view('admin.sensor_suhu.suhu_kolam1',compact('data'));
    }
}
