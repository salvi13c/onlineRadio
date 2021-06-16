<?php

namespace App\Http\Controllers\Lists;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsStationController extends Controller
{
    public function __invoke(Request $request)
    {
        $id = $request->id;
        $stations = $this->getDetailsStation($id);
        if (session()->has('userUuid')){
            $this->addToHistorial($stations,$id);
        }
        if ($stations!=null){
            return view('detailsstation',[
                'stationElement' => $stations,
                'recomendedStations' => $this->getRecommendedStations()
    
            ]);
        }else{
            return view('errorstation');
        }
    }

    //obtiene la lista de estaciones recomendadas (se imprimen unas 10 aleatorias),
    public function getRecommendedStations(){
        $recomendedStations = DB::select('SELECT * from stations ORDER BY RAND() LIMIT 10;');
        return $recomendedStations;
    }

    //obtiene los detalles de la estación de radio que se mostrarán en pantalla
    public function getDetailsStation($id){
        $stations = DB::select("SELECT s.`id` as station_id, s.`name` as station_name, s.`description`
        as station_description, s.`url` as station_url, s.`image` as station_image ,g.`name` as station_genere,
        c.`name` as station_country, c.`continent` as station_continent, c.`language` as station_language  from stations s 
        LEFT JOIN generes g ON s.`genere`=g.`id` 
        LEFT JOIN countries c ON s.`country`=c.`id`
        WHERE s.`id`='$id'");
        return $stations;
    }

    //Añade las canciones al historial
    public function addToHistorial($stations,$id){
        DB::table('listen_historial')->insert([
            'user_uuid' => session('userUuid'),
            'station_id' => $stations[0]->station_id
        ]);
    }

}
