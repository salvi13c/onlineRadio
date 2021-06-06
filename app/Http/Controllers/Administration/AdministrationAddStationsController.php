<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationAddStationsController extends Controller
{
    public function __invoke(Request $request)
    {

        if (session()->has('userUidd') && session('userLevel')=='admin'){
            return view('addstations');
        }else{
            return redirect('/');
        }
    
    }

}
