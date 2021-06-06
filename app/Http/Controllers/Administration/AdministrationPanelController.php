<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationPanelController extends Controller
{
    public function __invoke(Request $request)
    {
        if (session()->has('userUidd') && session('userLevel')=='admin'){
            return view('adminpanel', [
                'stationsList' => $this->getStations(),
                'generesList' => $this->getGeneres(),
                'countriesList' => $this->getCountries(),
                'topChartsList' => $this->getCharts(),
            ]);
        }else{
            return redirect('/');
        }
    }

    public function getStations(){
        $stations = DB::select("SELECT s.*,g.`name` as genere_name, c.`name` as country_name from stations s 
        LEFT JOIN generes g ON g.`id`=s.`genere`
        LEFT JOIN countries c ON c.`id`=s.`country`");
        return $stations;
    }

    public function getGeneres(){
        $generes = DB::select("SELECT * from generes");
        return $generes;
    }

    public function getCountries(){
        $generes = DB::select("SELECT * from countries");
        return $generes;
    }

    public function getCharts(){
        $stations = DB::select("SELECT tc.`id`, tc.`song`, tc.`artist`from topcharts tc");
        return $stations;
    }

}
