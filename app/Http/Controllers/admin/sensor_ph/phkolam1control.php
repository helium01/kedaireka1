<?php

namespace App\Http\Controllers\admin\sensor_ph;

use App\Http\Controllers\Controller;
use App\Models\ph;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class phkolam1control extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');



    }

    public function index(){


        $sensor=HTTP::GET('https://api.thingspeak.com/channels/1537281/fields/1.json?api_key=VL32957PDVO254CZ');

        $json = json_decode($sensor, TRUE);
        $data=($json['feeds']);
        $jumlah=sizeof($data);
        $b=$data[$jumlah-1]['field1'];
        $c=(int)$b;
        $f=0;
        $g=$f++;
        $d=$data;
        if ($c>=8.0){
            $a="ph di sini dalam sini belum layak untuk di gunakan karena terlalu basa ".$b;
        }
        elseif($c<=6.0){
            $a="ph di sini tidak layak di gunakan karena terlalu asam ".$b;
        }
        else{
            $a="ph di sini layak untuk di buang ke sungai "."$b";
        }
        // dd($b);
        // untuk save data
        $save=new ph;
        $save->ph=$b;
        $save->save();
        
        return view("admin.sesnor_ph.ph_kolam1",compact('data','jumlah','a','f','d','g','b'));
    }
    public function index2(Request $request){
        $strat="$request->start";
        $end="$request->end";
        $url='https://api.thingspeak.com/channels/1537281/fields/1.json?start='.$strat.'&end='.$end;
        $sensor=HTTP::GET($url);
        $json = json_decode($sensor, TRUE);
        $data=($json['feeds']);
        $jumlah=sizeof($data);
        dd($jumlah);
        $b=$data[$jumlah-1]['field1'];
        $c=(int)$b;
        $f=0;
        $g=$f++;
        $d=$data;
        if ($c>=8.0){
            $a="ph di hari itu  dalam sini belum layak untuk di gunakan karena terlalu basa ".$b;
        }
        elseif($c<=6.0){
            $a="ph di hari itu  tidak layak di gunakan karena terlalu asam ".$b;
        }
        else{
            $a="ph di gari itu layak untuk di buang ke sungai "."$b";
        }
        return redirect("admin.sesnor_ph.historyph_kolam1",compact('data','jumlah','a','f','d','g'));
    }
    public function cetak (){
        $sensor=HTTP::GET('https://api.thingspeak.com/channels/1537281/fields/1.json?api_key=VL32957PDVO254CZ');

        $json = json_decode($sensor, TRUE);
        $data=($json['feeds']);

        $jumlah=sizeof($data);
        $b=$data[$jumlah-1]['field1'];
        $c=(int)$b;
        $f=0;
        $g=$f++;
        $d=$data;
        $pdf = PDF::loadView('admin.dompdf.ph', ['data'=>$data]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('cetakph.pdf');

    }
}
