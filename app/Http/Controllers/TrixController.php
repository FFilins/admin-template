<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use Illuminate\Http\Request;

class TrixController extends Controller
{
    public function index(Request $request) 
    {
        $cardId = $request->cardId;

        return view('update')->with(compact('cardId'));
    }

}
