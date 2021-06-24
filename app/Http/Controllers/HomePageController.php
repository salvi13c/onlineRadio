<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function __invoke(Request $request)
    {
        $popularStations = DB::select('SELECT * from stations ORDER BY RAND() LIMIT 10;');
        return view('home', [
            'popularStationsList' => $popularStations
        ]);
    }
}
