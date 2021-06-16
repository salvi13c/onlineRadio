<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationEditStationsController extends Controller
{
    public function __invoke(Request $request)
    {
        if (session()->has('userUuid') && session('userLevel')=='admin'){
            return view('editstations', [
                'countriesList' => $this->getCountries(),
                'generesList' => $this->getGeneres(),
                'name' =>  base64_decode($request->name),
                'description' => base64_decode($request->description),
                'image' => base64_decode($request->image),
                'country' => base64_decode($request->country),
                'genere' => base64_decode($request->genere),
                'url' => base64_decode($request->url),
                'id' =>base64_decode($request->id)
            ]);
        }else{
            return redirect('/');
        }

        
    
    }

    public function getGeneres(){
        $generes = DB::select('SELECT * from generes');
        return $generes;
    }

    public function getCountries(){
        $countries = DB::select('SELECT * from countries');
        return $countries;
    }

}
