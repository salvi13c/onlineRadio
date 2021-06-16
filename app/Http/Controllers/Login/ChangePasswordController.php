<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangePasswordController extends Controller
{
    public function __invoke(Request $request)
    {
        if (session()->has('userUuid')){
            return view('changepassword');
        }else{
            return redirect('/');
        }
    }
}

