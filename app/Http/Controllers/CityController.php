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
    public function store(Request $request) {

        $request->validate([
            'name' => 'required|max:255|string',
            'fullname' => 'nullable|max:255|string',
            'excerpt' => 'nullable|max:255|string',
            'bio' => 'nullable|max:2000|string',
            'website_url' => 'nullable|max:255|string',
            'lat' => 'nullable|max:255|string',
            'long' => 'nullable|max:255|string',
            'thumbnail_img' => 'nullable|mimes:jpg,jpeg,png,webp',
            'banner_img' => 'nullable|mimes:jpg,jpeg,png,webp'
        ]);

        $thumb = 'images/default-images/deepai-generic-wisconsin-city01.jpeg';
        if ($request->has('thumbnail_img')) {
            $thumbnailFile = $request->file('thumbnail_img');
            $ext = $thumbnailFile->getClientOriginalExtension();
            $thumbnailFilename = "city_" .  "_thumbnail_" . time() . "." . $ext;
            $thumbnailPath = 'uploads/cities/';
            $thumbnailFile->move($thumbnailPath, $thumbnailFilename);
            $thumb = $thumbnailPath . $thumbnailFilename;
        }

        $banner = 'images/default-images/deepai-generic-wisconsin-city02.jpeg';
        if ($request->has('banner_img')) {
            $bannerFile = $request->file('banner_img');
            $ext = $bannerFile->getClientOriginalExtension();
            $bannerFilename = "city_" . "_banner_" . time() . "." . $ext;
            $bannerPath = 'uploads/cities/';
            $bannerFile->move($bannerPath, $bannerFilename);
            $banner = $bannerPath . $bannerFilename;
        }

        $city = [
            'name' => request('name'),
            'fullname' => request('name'),
            'excerpt' => request('excerpt'),
            'bio' => request('bio'),
            'website_url' => request('website_url'),
            'lat' => request('lat'),
            'long' => request('long'),
            'thumbnail_img' => $thumb,
            'banner_img' => $banner,
        ];

        City::create($city);

        return redirect('/cities');
    }

    // GET /cities/
    public function edit($id) {
        $city = City::findOrFail($id);
        return view('cities.edit', ['city' => $city]);
    }

    // Destroy /cities/{id}
    public function delete($id) {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect('/cities');
    }
}
