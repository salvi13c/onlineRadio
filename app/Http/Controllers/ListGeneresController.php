<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListGeneresController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('listgeneres', [
            'generesList' => $this->getGeneres()
        ]);
    }

    public function getGeneres(){
        $generes = DB::select("SELECT * from generes");
        return $generes;
    }
}
