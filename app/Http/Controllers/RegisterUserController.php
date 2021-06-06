<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterUserController extends Controller
{
    public function __invoke(Request $request)
    {
        if (!session()->has('userUidd')){
            return view('register');
        }else{
            return redirect('/');
        }
    }
}
