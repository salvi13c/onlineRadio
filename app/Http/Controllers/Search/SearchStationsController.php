<?php
namespace App\Http\Controllers\Search;
use Illuminate\Http\Request;




class SearchStationsController extends Controller
{
    
    public function __invoke(Request $request)
    {    
        return $this->search($request);
    }
    
    
    
    public function search(Request $request)
    {  
        if($request->ajax()){
            $output="";
            $stationsList=\Illuminate\Support\Facades\DB::table('stations')->where('name','LIKE','%'.$request->search."%")->get();
            if($stationsList && !$request->search=="") {    
                foreach ($stationsList as $key => $stations) {  
                    $output.='<tr>'.
                    '<td><img src="'.$stations->image.'" width="60" height="50" id="search_image"><a id="search-text" href="/detailsstation/'.$stations->id.'">'.$stations->name.'<a></td>'.
                    '</tr>';
                }
                return Response($output); 
            }
        }
    }
    
}