<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StationsPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      
        return view('stations', [
            'popularStationsList' => $this->getPopularStations(),
            'newsStationsList' => $this->getStations('News'),
            'popStationsList' => $this->getStations('Pop'),
            'generesList' => $this->getGenere(),
            'countriesList' => $this->getCountries()


        ]);
    }

    public function getPopularStations(){
        $popularStations = DB::select('SELECT * from stations ORDER BY RAND() LIMIT 10;');
        return $popularStations;
    }

    public function getStations($genere){
        $stations = DB::select("SELECT s.* from stations s 
        LEFT JOIN generes g ON g.`id`=s.`genere` 
        WHERE g.`name`='$genere'");
        return $stations;
    }

    public function getGenere(){
        $generes = DB::select("SELECT * from generes LIMIT 7");
        return $generes;
    }

    public function getCountries(){
        $generes = DB::select("SELECT * from countries LIMIT 7");
        return $generes;
    }
}
