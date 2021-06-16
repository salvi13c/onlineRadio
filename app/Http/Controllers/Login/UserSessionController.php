<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserSessionController extends Controller
{

    public function __invoke(Request $request)
    {
        $uuid = $request->uuid;
        $name = $request->name;
        $email = $request->email;
        $status = $request->status;
        if ($status=="sessionstart"){
            $this->sessionStart($uuid);
        }else if ($status=="sessionregister"){
            $this->sessionRegister($uuid,$name,$email);
            $this->sendRegisterMail($name,$email);
            $this->sessionStart($uuid);
        }else if ($status=="sessiondown"){
            $this->sessionDown();
        }
        return redirect('/');
        
    }

    public function sessionStart($uuid){
        session(['userUuid' => $uuid,
        'userLevel' => $this->getUserLevel($uuid)]);
    }

    public function sessionDown(){
        session()->forget('userUuid');
        session()->forget('userLevel');
    }

    public function sessionRegister($uuid,$name,$email){
        DB::table('users_table')->insert([
            'uuid' => $uuid,
            'name' => $name,
            'email' => $email,
            'user_level'=>'user'
        ]);
    }

    public function getUserLevel($uuid){
        $user = DB::select("SELECT user_level from users_table where uuid='$uuid'");
        return $user[0]->user_level;
    }

    public function sendRegisterMail($name,$email)
    {
        Mail::send(['html'=>'mailregister'], $data=[
            'name' => $name],
            function ($message) use ($email,$name) {
                $message->from('onlineradio@radio.com');
                $message->to($email,$name)
                ->subject('Se ha enviado una sugerencia ');
            }
            );
    
            
       
        
    
    }
    

}