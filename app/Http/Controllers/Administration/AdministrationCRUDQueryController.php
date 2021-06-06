<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationCRUDQueryController extends Controller
{
    public function __invoke(Request $request)
    {

        if (session()->has('userUidd') && session('userLevel')=='admin'){
            $this->crud($request);
            return redirect('/adminpanel');
        }else{
            return redirect('/');
        }
    }

    public function crud($request){
        $type = $request->type;
        $action = $request->action;
        $name = $request->name;
        if ($action=="insert"){
            if ($type=="genere"){
                $description = $request->description;
                $this->addGenere($name,$description);
            }else if ($type=="country"){
                $continent = $request->continent;
                $language = $request->language;
                $this->addCountry($name,$continent,$language);
            }else if ($type=="station"){
                //$this->addStation($name,$continent,$language);
            }
        }else if ($action=="edit"){

        }else if ($action=="remove"){
            if ($type=="genere"){
                $id = $request->id;
                $this->deleteGenere($id);
            }else if ($type=="country"){
                $id = $request->id;
                $this->deleteCountry($id);
            }else if ($type=="station"){
                $id = $request->id;
                $this->deleteStation($id);
            } 
        }
    }

    public function addCountry($name,$continent,$language){
        DB::table('countries')->insert([
            'name' => $name,
            'continent' => $continent,
            'language' => $language
        ]);
    }

    public function addGenere($name,$description){
        DB::table('generes')->insert([
            'name' => $name,
            'description' => $description
        ]);
    }

    public function addStation(){

    }

    public function editCountry(){
        
    }

    public function editStation(){

    }

    public function editLanguage(){

    }

    public function deleteGenere($id){
        DB::table('generes')->delete($id);
    }

    public function deleteStation($id){
        DB::table('stations')->delete($id);
    }

    public function deleteCountry($id){
        DB::table('countries')->delete($id);
    }

}
