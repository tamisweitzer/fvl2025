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

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|max:255|string',
            'fullname' => 'nullable|max:255|string',
            'excerpt' => 'nullable|max:255|string',
            'bio' => 'nullable|max:2000|string',
            'city_id' => 'nullable',
            'state_id' => 'nullable',
            'website_url' => 'nullable|max:255|string',
            'thumbnail_img' => 'nullable|mimes:jpg,jpeg,png,webp',
            'banner_img' => 'nullable|mimes:jpg,jpeg,png,webp'
        ]);

        if ($request->has('thumbnail_img')) {
            $thumbnailFile = $request->file('thumbnail_img');
            $ext = $thumbnailFile->getClientOriginalExtension();
            $thumbnailFilename = time() . "-band_thumbnail" . $ext;
            $thumbnailPath = 'uploads/bands/';
            $thumbnailFile->move($thumbnailPath, $thumbnailFilename);
        }

        if ($request->has('banner_img')) {
            $bannerFile = $request->file('banner_img');
            $ext = $bannerFile->getClientOriginalExtension();
            $bannerFilename = time() . "-band_banner" . $ext;
            $bannerPath = 'uploads/bands/';
            $bannerFile->move($bannerPath, $bannerFilename);
        }
s
        Band::create([
            'name' => request('name'),
            'fullname' => request('fullname'),
            'excerpt' => request('excerpt'),
            'bio' => request('bio'),
            'city_id' => request('city_id'),
            'state_id' => request('state_id'),
            'website_url' => request('website_url'),
            'thumbnail_img' => $thumbnailPath . $thumbnailFilename,
            'banner_img' => $bannerPath . $bannerFilename
        ]);

        return redirect('/bands');
    }

    public function show($id): View {
        $band = Band::find($id);
        $events = Event::all()->where('band_id', $band->id);
        return view('bands.show', ['band' => $band, 'events' => $events]);
    }
}
