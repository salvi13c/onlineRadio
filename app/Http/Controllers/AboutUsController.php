<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function __invoke(Request $request)
    {

        return view('aboutus', [
            'userUidd'=> session('userUidd'),
            'userLevel'=> session('userLevel')
        ]);
        
    }

}
