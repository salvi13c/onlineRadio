<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function __invoke(Request $request)
    {
        $popularStations = DB::select('SELECT * from stations');
        return view('home', [
            'popularStationsList' => $popularStations
        ]);
    }
}
