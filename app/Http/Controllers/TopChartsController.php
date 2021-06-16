<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopChartsController extends Controller
{

    public function __invoke(Request $request){
        return view('topchartlist', [
            'topchartlist' => $this->feed($this->getTopChartsUrl())
        ]);
    }

    function feed($feedURL){
        $i = 1; 
        $url = $feedURL; 
        $rss = simplexml_load_file($url);
        $topchartlist=array(); 
            foreach($rss->channel->item as $item) { 
            $title = $item->title;  //extrae el titulo
            $artist = $item->category[0];  //extrae el artista
            $category = $item->category[2]; //extrae la categoria
            $link = $item->link; //extrae el link de compra
            if ($i <= 50) { // extrae solo 16 items
             array_push($topchartlist,(object)[
                'position' =>$i,
                'title' => $title,
                'artist' => $artist ,
                'category' => $category,
                'link' => $link
                ]);
             $i++;
            }
        }
    return $topchartlist;
    }

    function getTopChartsUrl(){
        $topCharts = DB::select("SELECT * from settings where config_name='rss_top_charts_url'");
        return $topCharts[0]->value;
    }
}
