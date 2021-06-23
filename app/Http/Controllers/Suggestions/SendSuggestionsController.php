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
        echo "
        <script type=\"text/javascript\">
        alert('Report has been sended!')
        </script>
    ";
    return redirect('/');
    }
    
    
    public function sendMail(Request $request)
    {
        Mail::send(['html'=>'mailsuggestion'], $data=[
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject') ],
            function ($message) use ($request) {
                $message->from('onlineradio57channels@radio.com');
                $message->to($request->get('email'), $request->get('name'))
                ->subject('An user has sended a report.');
            }
            );
    }
}
