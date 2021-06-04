<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopChartsController extends Controller
{

    public function __invoke(Request $request)
    {
        return view('topchartlist', [
            'topchartlist' => $this->getCharts(),
        ]);
    }
    

    public function getCharts(){
        $stations = DB::select("SELECT tc.`id`, tc.`song`, tc.`artist`from topcharts tc");
        return $stations;
    }
}
