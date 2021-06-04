<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RadioPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $popularStations = DB::select('SELECT * from stations');
        return view('radio', [
            'popularStationsList' => $popularStations,
            'newsStationsList' => $this->getStations('News'),
            'popStationsList' => $this->getStations('Pop'),
            'generesList' => $this->getGenere(),
            'countriesList' => $this->getCountries()


        ]);
    }

    public function getStations($genere){
        $stations = DB::select("SELECT s.* from stations s 
        LEFT JOIN generes g ON g.`id`=s.`genere` 
        WHERE g.`name`='$genere'");
        return $stations;
    }

    public function getGenere(){
        $generes = DB::select("SELECT * from generes");
        return $generes;
    }

    public function getCountries(){
        $generes = DB::select("SELECT * from countries");
        return $generes;
    }
}
