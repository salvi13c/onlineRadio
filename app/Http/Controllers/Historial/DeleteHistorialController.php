<?php

namespace App\Http\Controllers\Historial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteHistorialController extends Controller
{

    public function __invoke(Request $request)
    {
        $session=session('userUuid');
        if (session()->has('userUuid')){
            $this->deleteHistorial($session);
            return redirect('/historial');
        }else{
            return redirect('/');
        } 
    }



    public function deleteHistorial($session){
        $historial = DB::select("delete from listen_historial where user_uuid='$session'");
        return $historial;
   }
}


