<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\City;
use App\Models\SummerEvents;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class CityController extends Controller {
    public function index(): View {
        return view('cities.index', ['cities' => City::all()]);
    }

    // GET /cities/{id}
    public function show($id): View {
        $city = City::find($id);
        // $bands = Band::all()->where('city_id', $city->id);
        $events = SummerEvents::all()
            ->where('city', '=', $city->name)
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');

        // TODO when venues are set up. $venues = Venue::all()->where('city_id', $city->id);

        return view('cities.show', ['city' => $city, 'events' => $events]);
    }

    // GET /cities/create
    public function create() {
        return view('cities.create', []);
    }

    // POST /cities/create
    public function store() {
        return ("store a new city");
    }

    // GET /cities/
    public function edit($id) {
        return ("TODO: edit this city");
    }
}
