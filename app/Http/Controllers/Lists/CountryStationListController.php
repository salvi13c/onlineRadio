<?php

namespace App\Http\Controllers\Lists;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryStationListController extends Controller
{
    public function __invoke(Request $request)
    {
        $countryName = $request->name;
        $stations = $this->getStationsByCountry($countryName);
        if ($stations!=null){
            return view('liststationsbycountry',[
                'stations' => $stations,
    
            ]);
        }else{
            return view('error');
        }
    }

    public function getStationsByCountry($countryName){
        $stations = DB::select("SELECT s.`id` as station_id, s.`name` as station_name, s.`description`
        as station_description, c.`name` as country_name , s.`url` as station_url, s.`image` as station_image ,g.`name` as genere_name from stations s 
        LEFT JOIN generes g ON s.`genere`=g.`id` 
        LEFT JOIN countries c ON s.`country`=c.`id` 
        WHERE c.`name`='$countryName'");
        return $stations;
    }
}
