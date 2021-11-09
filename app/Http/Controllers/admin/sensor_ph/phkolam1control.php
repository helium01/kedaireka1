<?php

namespace App\Http\Controllers\admin\sensor_ph;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class phkolam1control extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $sensor=HTTP::GET('https://api.thingspeak.com/channels/1548591/fields/1.json?api_key=VL32957PDVO254CZ');
        $json = json_decode($sensor, TRUE);
        $data=($json['feeds']);
        $jumlah=sizeof($data);
        // dd($data);
        return view("admin.sesnor_ph.ph_kolam1",compact('data','jumlah'));
    }
}
