<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristPoint;

class TouristPointController extends Controller
{
    public function index(){

        $points = TouristPoint::all();
        return view('welcome', ['points'=>$points]);
    }

    public function store(){

        $ufs = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'];
        
        return view('attractions.create', ['ufs' => $ufs]);
    }

}
