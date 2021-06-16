<?php
namespace App\Http\Controllers\Suggestions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuggestionsController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('sendsuggestions');
    }
}
