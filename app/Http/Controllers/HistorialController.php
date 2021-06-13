<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialController extends Controller
{

    public function __invoke(Request $request)
    {
        $session=session('userUidd');
        if (session()->has('userUidd')){
            return view('historial',[
                'historial' => $this->getHistorial($session)
         ]);
        }else{
            return redirect('/');
        } 
    }



    public function getHistorial($session){
        $historial = DB::select("SELECT s.`name` as station_name ,h.`user_uidd` as uidd, h.id as id, h.date as station_date, 
        g.name as genere_name, s.image as station_image from listen_historial h
        LEFT JOIN stations s ON s.`id`=h.`station_id`
        LEFT JOIN generes g ON s.genere=g.id 
        where h.`user_uidd`='$session' ORDER BY station_date DESC");
        return $historial;
   }
}


