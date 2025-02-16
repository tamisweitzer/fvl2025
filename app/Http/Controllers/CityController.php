<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\City;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CityController extends Controller {
    public function index(): View {
        return view('cities.index', ['cities' => City::all()]);
    }

    public function show($id): View {
        $city = City::find($id);
        $bands = Band::all()->where('city_id', $city->id);
        // TODO when venues are set up. $venues = Venue::all()->where('city_id', $city->id);
        return view('cities.show', ['city' => $city, 'bands' => $bands]);
    }
}
