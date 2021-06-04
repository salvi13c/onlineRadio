<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function __invoke(Request $request){
        return view('news', [
            'newslist' => $this->feed("https://www.billboard.com/feed/")
        ]);
    }

    function makeFeed(){
        
    }


    function feed($feedURL){
        $i = 0; 
        $url = $feedURL; 
        $rss = simplexml_load_file($url);
        $newslist=array(); 
            foreach($rss->channel->item as $item) { 
            $link = $item->link;  //extrae el link
            $title = $item->title;  //extrae el titulo
            $date = $item->pubDate;  //extrae la fecha
            $guid = $item->guid;  //extrae el link de la imagen
            $description = strip_tags($item->description);  //extrae la descripcion
            if (strlen($description) > 400) { //limita la descripcion a 400 caracteres
            $stringCut = substr($description, 0, 200);                   
            $description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';}
            if ($i < 16) { // extrae solo 16 items
             //echo '<div class="cuadros1"><h4><a href="'.$link.'" target="_blank">'.$title.'</a></h4><br><img src="'.$guid.'"><br>'.$description.'<br><div class="time">'.$date.'</div></div>';}
             array_push($newslist,(object)[
                'link' => $link,
                'title' => $title,
                'guid' => $guid,
                'description' => $description,
                'date' => $date,
                ]);
             $i++;
            }
            //echo '<div style="clear: both;"></div>';
        }
    return $newslist;
    }
}

