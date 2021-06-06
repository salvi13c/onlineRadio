<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{

    public function __invoke(Request $request)
    {
        if (session()->has('userUidd') && session('userLevel')=='admin'){
            return view('userprofile', [
                'userProfile' => $this->getUserProfile(),
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
}
