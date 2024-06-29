<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristPoint;

class TouristPointController extends Controller
{
    public function index(){

        $touristPoints = TouristPoint::all();
        return view('welcome', ['touristPoints'=>$touristPoints]);
    }

    public function touristPoint(){
        return view('registerTouristPoint');
    }
}
