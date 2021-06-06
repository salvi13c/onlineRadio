<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        if (!session()->has('userUidd')){
            return view('login');
        }else{
            return redirect('/');
        }
    }
}
