<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Route;

class UserSessionController extends Controller
{

    public function __invoke(Request $request)
    {
        $uidd = $request->uidd;
        $name = $request->name;
        $email = $request->email;
        $status = $request->status;
        if ($status=="sessionstart"){
            $this->sessionStart($uidd);
        }else if ($status=="sessionregister"){
            $this->sessionRegister($uidd,$name,$email);
            $this->sessionStart($uidd);
        }else if ($status=="sessiondown"){
            $this->sessionDown();
        }
        return redirect('/');
        
    }

    public function sessionStart($uidd){
        session(['userUidd' => $uidd,
        'userLevel' => $this->getUserLevel($uidd)]);
    }

    public function sessionDown(){
        session()->forget('userUidd');
        session()->forget('userLevel');
    }

    public function sessionRegister($uidd,$name,$email){
        DB::table('users_table')->insert([
            'uidd' => $uidd,
            'name' => $name,
            'email' => $email,
            'user_level'=>'user',
            'favourite_stations'=>'[]',
            'playlist_stations'=>'[]',
        ]);
    }

    public function getUserLevel($uidd){
        $user = DB::select("SELECT user_level from users_table where uidd='$uidd'");
        return $user[0]->user_level;
    }
    

}