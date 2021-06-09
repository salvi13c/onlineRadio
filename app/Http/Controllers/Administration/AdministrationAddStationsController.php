<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationAddStationsController extends Controller
{
    public function __invoke(Request $request)
    {

        if (session()->has('userUidd') && session('userLevel')=='admin'){
            return view('addstations', [
                'generesList' => $this->getGeneres(),
                'countriesList' =>$this->getCountries()
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
