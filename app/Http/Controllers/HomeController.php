<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sensor4=HTTP::GET('https://api.thingspeak.com/channels/1548591/fields/4.json?api_key=VL32957PDVO254CZ');
        $sensor3=HTTP::GET('https://api.thingspeak.com/channels/1548591/fields/3.json?api_key=VL32957PDVO254CZ');
        $sensor2=HTTP::GET('https://api.thingspeak.com/channels/1548591/fields/2.json?api_key=VL32957PDVO254CZ');
        $sensor1=HTTP::GET('https://api.thingspeak.com/channels/1548591/fields/1.json?api_key=VL32957PDVO254CZ');
        $json1 = json_decode($sensor1, TRUE);
        $dt1=sizeof($json1['feeds']);
        $data1=($json1['feeds'][$dt1-1]['field1']);
        $datas1=($json1['feeds'][$dt1-2]['field1']);
        $json2 = json_decode($sensor2, TRUE);
        $dt2=sizeof($json2['feeds']);
        $data2=($json2['feeds'][$dt1-1]['field2']);
        $datas2=($json2['feeds'][$dt1-2]['field2']);
        $json3 = json_decode($sensor3, TRUE);
        $dt3=sizeof($json3['feeds']);
        $data3=($json3['feeds'][$dt1-1]['field3']);
        $datas3=($json3['feeds'][$dt1-2]['field3']);
        $json4 = json_decode($sensor4, TRUE);
        $dt4=sizeof($json4['feeds']);
        $data4=($json4['feeds'][$dt1-1]['field4']);
        $datas4=($json4['feeds'][$dt1-2]['field4']);
        // dd($data1);
        return view('admin.home.home',compact('data1','datas1','data2','data3','data4','datas2','datas3','datas4'));
    }
    public function peta(){
        return view('admin.home.peta');
    }
}
