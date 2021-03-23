<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Skaiciavimai2Controller extends Controller
{
    public function show()
    {
        $rez = Session::get('sum', 'not found'); //jeigu sesisjoje nera sum, tada raso not found
        Session::put('sum', null);
        return view('pc.show', ['r' => $rez]);
    }

    public function calc(Request $request)
    {
        $sum = $request->a + $request->b;
        Session::put('sum', $sum); //i sesija irasome rezultata

        return redirect()->back(); //po get mertodo redirektinam visada. sitas yra get, nes web.php parasyta show ir ten get
    }
}
