<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationEditCountriesController extends Controller
{
    public function __invoke(Request $request)
    {
        if (session()->has('userUidd') && session('userLevel')=='admin'){
            return view('editcountries', [
                'name' =>  base64_decode($request->name),
                'continent' =>base64_decode($request->continent),
                'language' =>base64_decode($request->language),
                'id' =>base64_decode($request->id)
            ]);
        }else{
            return redirect('/');
        }
    
    }

}
