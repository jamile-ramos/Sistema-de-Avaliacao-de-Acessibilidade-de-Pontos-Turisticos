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

    public function touristPoint(){
        return view('/attractions/create');
    }
}
