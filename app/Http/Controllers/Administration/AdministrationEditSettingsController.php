<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationEditSettingsController extends Controller
{
    public function __invoke(Request $request)
    {
        if (session()->has('userUuid') && session('userLevel')=='admin'){
            return view('editsettings', [
                'id' =>  base64_decode($request->id),
                'config_name' =>base64_decode($request->config_name),
                'value' =>base64_decode($request->value)
            ]);
        }else{
            return redirect('/');
        }
    
    }

}
