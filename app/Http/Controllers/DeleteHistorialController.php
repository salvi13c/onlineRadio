<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteHistorialController extends Controller
{

    public function __invoke(Request $request)
    {
        $session=session('userUidd');
        if (session()->has('userUidd')){
            $this->deleteHistorial($session);
            return redirect('/historial');
        }else{
            return redirect('/');
        } 
    }



    public function deleteHistorial($session){
        $historial = DB::select("delete from listen_historial where user_uidd='$session'");
        return $historial;
   }
}


