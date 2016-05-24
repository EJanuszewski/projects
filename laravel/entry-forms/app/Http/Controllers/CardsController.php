<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{
    //
    public function index()
    {

        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }

    public function store(Request $request, Card $note)
    {

        $card = new Card($request->all());

        $card->save();

        return back();
    }
}
