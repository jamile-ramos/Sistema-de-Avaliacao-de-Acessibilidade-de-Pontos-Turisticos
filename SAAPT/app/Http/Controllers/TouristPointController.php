<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TouristPoint;

class TouristPointController extends Controller
{
    public function index()
    {
        $search = request('search');
        $filterSelect = request('filter-points', 'best');
        $filterButtons = request('filter-buttons', 'best');
        $points = TouristPoint::query(); //iniciando a consulta

        //search
        if ($search) {
            $points = TouristPoint::where('name','like','%' . $search . '%');
        } 
        //filters
        if ($filterSelect && $filterSelect != 'best') {
            $points->orderBy($filterSelect . 'Note', 'desc');
        } else if ($filterButtons && $filterButtons != 'best') {
            $points->orderBy($filterButtons . 'Note', 'desc');
        }else {
            $points->orderBy('generalNotes', 'desc');
        }

        $points = $points->limit(9)->get();

        return view(
            'welcome',
            [
                'points' => $points,
                'search' => $search,
                'filterSelect' => $filterSelect,
                'filterButtons' => $filterButtons
            ]
        );
    }

    public function create()
    {
        $ufs = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'];

        return view('attractions.create', ['ufs' => $ufs]);
    }

    public function show($id){
        $point = TouristPoint::findOrFail($id);

        return view('attractions.show', ['point' => $point]);
    }

    public function store(Request $request)
    {
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

        return redirect('/');
    }
}
