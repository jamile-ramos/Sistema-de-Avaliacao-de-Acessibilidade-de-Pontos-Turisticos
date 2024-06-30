<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristPoint;

class TouristPointController extends Controller
{
    public function index()
    {

        $points = TouristPoint::all();
        return view('welcome', ['points' => $points]);
    }

    public function store(Request $request)
    {

        $ufs = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'];

        $point = new TouristPoint();

        $point->name = $request->name;
        $point->city = $request->city;
        $point->state = $request->state;
        $point->street = $request->street;
        $point->district = $request->district;
        $point->zipCode = $request->zipCode;
        $point->description = $request->description;
        $point->touristPointType = ($request->touristPointType == 'publico') ? 0 : 1;

        $point->save();

        return view('attractions.create', ['ufs' => $ufs]);
    }
}
