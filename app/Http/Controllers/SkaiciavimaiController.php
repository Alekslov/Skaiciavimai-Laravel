<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkaiciavimaiController extends Controller
{
    public function suma($a, $b) 
    {
        if(is_numeric($a) && is_numeric($b)) {
            $suma = $a + $b;
            return view('suma', compact('a', 'b', 'suma'));
        } else {
            return 'Iveskite skaicius';
        }
    }

    public function daugyba($a, $b) 
    {
        if(is_numeric($a) && is_numeric($b)) {
            $daugyba = $a * $b;
            return view('daugyba', compact('a', 'b', 'daugyba'));
        } else {
            return 'Iveskite skaicius';
        }
    }

    public function dalyba($a, $b) 
    {
        if(is_numeric($a) && is_numeric($b)) {
            $dalyba = $a / $b;
            return view('dalyba', compact('a', 'b', 'dalyba'));
        } else {
            return 'Iveskite skaicius';
        }
    }

    public function atimtis($a, $b) 
    {
        if(is_numeric($a) && is_numeric($b)) {
            $atimtis = $a / $b;
            return view('atimtis', compact('a', 'b', 'atimtis'));
        } else {
            return 'Iveskite skaicius';
        }
    }
}
