<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationCRUDQueryController extends Controller
{
    public function __invoke(Request $request)
    {

        if (session()->has('userUuid') && session('userLevel')=='admin'){
            $this->crud($request);
            return redirect('/adminpanel');
        }else{
            return redirect('/');
        }
    }

    public function crud($request){
        $type = $request->type;
        $action = $request->action;
        if ($action=="insert"){
            if ($type=="genere"){
                $name = base64_decode($request->name);
                $description = base64_decode($request->description);
                $this->addGenere($name,$description);
            }else if ($type=="country"){
                $name = base64_decode($request->name);
                $continent = base64_decode($request->continent);
                $language = base64_decode($request->language);
                $this->addCountry($name,$continent,$language);
            }else if ($type=="station"){
                $name = base64_decode($request->name);
                $description = base64_decode($request->description);
                $image = base64_decode($request->image);
                $country = base64_decode($request->country);
                $genere = base64_decode($request->genere);
                $url = base64_decode($request->url);
                $this->addStation($name,$description,$image,$country,$genere,$url);
            }
        }else if ($action=="edit"){
            if ($type=="genere"){
                $id = base64_decode($request->id);
                $name = base64_decode($request->name);
                $description = base64_decode($request->description);
                $this->editGenere($name,$description,$id);
            }else if ($type=="country"){
                $id = base64_decode($request->id);
                $name = base64_decode($request->name);
                $continent = base64_decode($request->continent);
                $language = base64_decode($request->language);
                $this->editCountry($name,$continent,$language,$id);
            }else if ($type=="station"){
                $id = base64_decode($request->id);
                $name = base64_decode($request->name);
                $description = base64_decode($request->description);
                $image = base64_decode($request->image);
                $country = base64_decode($request->country);
                $genere = base64_decode($request->genere);
                $url = base64_decode($request->url);
                $this->editStation($name,$description,$image,$country,$genere,$url,$id);
            }else if ($type=="setting"){
                $id = base64_decode($request->id);
                $value = base64_decode($request->value);
                $this->editSetting($id,$value);
            }
        }else if ($action=="remove"){
            if ($type=="genere"){
                $id = base64_decode($request->id);
                $this->deleteGenere($id);
            }else if ($type=="country"){
                $id = base64_decode($request->id);
                $this->deleteCountry($id);
            }else if ($type=="station"){
                $id = base64_decode($request->id);
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
            'description' => $description,
        ]);
    }

    public function addStation($name,$description,$image,$country,$genere,$url){
        DB::table('stations')->insert([
            'name' => $name,
            'description' => $description,
            'image' => $image,
            'genere' => $genere,
            'country' => $country,
            'url' => $url
        ]);
    }

    public function editCountry($name,$continent,$language,$idCountry){
        DB::table('countries')
            ->where('id',intval($idCountry))
            ->update([
                'name' => $name,
                'continent' => $continent,
                'language' => $language
            ]);
    }

    public function editGenere($name,$description,$idGenere){
        DB::table('generes')
            ->where('id',intval($idGenere))
            ->update([
                'name' => $name,
                'description' => $description
            ]);
    }

    public function editStation($name,$description,$image,$country,$genere,$url,$idStation){
        DB::table('stations')
            ->where('id',intval($idStation))
            ->update([
                'name' => $name,
                'description' => $description,
                'image' => $image,
                'genere' => $genere,
                'country' => $country,
                'url' => $url
            ]);
    }

    public function editSetting($idSetting,$value){
        DB::table('settings')
        ->where('id',intval($idSetting))
        ->update([
            'value' => $value,
        ]);
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
