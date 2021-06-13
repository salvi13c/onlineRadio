<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchStationsResultsController extends Controller
{
    public function __invoke(Request $request)
    {
        $stationName = $request->searchstations;
        $stations = $this->getStationsByName($stationName);
        if ($stations!=null){
            
            return view('searchstationsresults',[
                'stations' => $stations,
    
            ]);
            echo $stationName;
        }else{
            return view('error');
        }
    }

    public function getStationsByName($stationName){
        $stations = DB::select("SELECT s.`id` as station_id, s.`name` as station_name, s.`description`
        as station_description, c.`name` as country_name , s.`url` as station_url, s.`image` as station_image ,g.`name` as genere_name from stations s 
        LEFT JOIN generes g ON s.`genere`=g.`id` 
        LEFT JOIN countries c ON s.`country`=c.`id` 
        WHERE s.`name` LIKE '%$stationName%'");
        return $stations;
    }
}
