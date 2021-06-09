<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationEditGeneresController extends Controller
{
    public function __invoke(Request $request)
    {
        if (session()->has('userUidd') && session('userLevel')=='admin'){
            return view('editgeneres', [
                'name' =>  base64_decode($request->name),
                'description' =>base64_decode($request->description),
                'id' =>base64_decode($request->id)
            ]);
        }else{
            return redirect('/');
        }
    
    }

}
