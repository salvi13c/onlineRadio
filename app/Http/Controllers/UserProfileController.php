<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{

    public function __invoke(Request $request)
    {
        $session=session('userUidd');
        if (session()->has('userUidd') && session('userLevel')=='admin'){
            return view('userprofile', [
                'userProfile' => $this->getUserProfile(),
                'historial' => $this->getHistorial($session)
            ]);
        }else{
            return redirect('/');
        }
    }
    

    public function getUserProfile(){
        $uidd=session('userUidd');
        $user = DB::select("SELECT * from users_table where uidd='$uidd'");
        return $user;
    }

    public function getHistorial($session){
        $historial = DB::select("SELECT s.`name` as station_name ,h.`user_uidd` as uidd, h.id as id, h.date as station_date, 
        g.name as genere_name, s.image as station_image from listen_historial h
        LEFT JOIN stations s ON s.`id`=h.`station_id`
        LEFT JOIN generes g ON s.genere=g.id 
        where h.`user_uidd`='$session' order by station_date DESC limit 5");
        return $historial;
   }
}
