<?php

namespace App\Http\Controllers\Lists;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class genereStationListController extends Controller
{
    public function __invoke(Request $request)
    {
        $genereName = $request->name;
        $stations = $this->getStationsByGenere($genereName);
        if ($stations!=null){
            return view('liststationsbygenere',[
                'stations' => $stations,
                'genere' => $request->name
    
            ]);
        }else{
            return view('error');
        }
    }

    public function getStationsByGenere($genereName){
        $stations = DB::select("SELECT s.`id` as station_id, s.`name` as station_name, s.`description`
        as station_description, c.`name` as country_name , s.`url` as station_url, s.`image` as station_image ,g.`name` as genere_name from stations s 
        LEFT JOIN generes g ON s.`genere`=g.`id` 
        LEFT JOIN countries c ON s.`country`=c.`id` 
        WHERE g.`name`='$genereName'");
        return $stations;
    }
}
