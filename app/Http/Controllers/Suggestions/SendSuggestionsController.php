<?php


namespace App\Http\Controllers\Suggestions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendSuggestionsController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->sendMail($request);
    }
    
    
    public function sendMail(Request $request)
    {
        Mail::send(['html'=>'mailsuggestion'], $data=[
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject') ],
            function ($message) use ($request) {
                $message->from('biblioteca@prueba.com');
                $message->to($request->get('email'), $request->get('name'))
                ->subject('Se ha enviado una sugerencia');
            }
            );
        
        
        
        
        return 'Se ha enviado la sugerencia con exito';
    }
}
