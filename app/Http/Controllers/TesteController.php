<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $request) 
    {
        $cardId = $request->cardId;

        $card = Objeto::find($cardId);

        // return view('update')->with(compact('cardId'));
        return view('updateView')->with(compact('card'));
    }

    public function update(Request $request, $cardId)
    {
        dd($request->text);
    }
}
