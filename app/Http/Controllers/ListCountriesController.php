<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListCountriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('listcountries', [
            'countriesList' => $this->getCountries()
        ]);
    }

    public function getCountries(){
        $generes = DB::select("SELECT * from countries LIMIT 7");
        return $generes;
    }
}
