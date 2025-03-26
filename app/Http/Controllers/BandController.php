<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\City;
use App\Models\Event;
use App\Models\State;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller {
    public function index(): View {
        $bands = Band::with(['city', 'state'])->get();

        return view('bands.index', ['bands' => $bands]);
    }

    public function create(): View {
        $cities = City::all();
        $states = State::all();
        return view('bands.create', ['cities' => $cities, 'states' => $states]);
    }

    public function store() {
        Band::create([
            'name' => request('name'),
            'fullname' => request('fullname'),
            'excerpt' => request('excerpt'),
            'bio' => request('bio'),
            'city_id' => request('city_id'),
            'state_id' => request('state_id'),
            'website_url' => request('website_url'),
            'thumbnail_img' => request('thumbnail_img'),
            'banner_img' => request('banner_img')
        ]);

        return redirect('/bands');
    }

    public function show($id): View {
        $band = Band::find($id);
        $events = Event::all()->where('band_id', $band->id);
        return view('bands.show', ['band' => $band, 'events' => $events]);
    }
}
