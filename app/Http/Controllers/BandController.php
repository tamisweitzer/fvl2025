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
        $bands = Band::with(['city', 'state'])->get()->reverse();

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

        $thumb = 'images/default-images/deepai-concert-2.jpg';
        if ($request->has('thumbnail_img')) {
            $thumbnailFile = $request->file('thumbnail_img');
            $ext = $thumbnailFile->getClientOriginalExtension();
            $thumbnailFilename = "band_" .  "_thumbnail_" . time() . $ext;
            $thumbnailPath = 'uploads/bands/';
            $thumbnailFile->move($thumbnailPath, $thumbnailFilename);
            $thumb = $thumbnailPath . $thumbnailFilename;
        }

        $banner = 'images/default-images/deepai-concert-banner-6.jpg';
        if ($request->has('banner_img')) {
            $bannerFile = $request->file('banner_img');
            $ext = $bannerFile->getClientOriginalExtension();
            $bannerFilename = "band_" . "_banner_" . time() . $ext;
            $bannerPath = 'uploads/bands/';
            $bannerFile->move($bannerPath, $bannerFilename);
            $banner = $bannerPath . $bannerFilename;
        }

        Band::create([
            'name' => request('name'),
            'fullname' => request('fullname'),
            'excerpt' => request('excerpt'),
            'bio' => request('bio'),
            'city_id' => request('city_id'),
            'state_id' => request('state_id'),
            'website_url' => request('website_url'),
            'thumbnail_img' => $thumb,
            'banner_img' => $banner
        ]);

        return redirect('/bands');
    }

    public function show($id): View {
        $band = Band::find($id);
        $events = Event::all()->where('band_id', $band->id);
        return view('bands.show', ['band' => $band, 'events' => $events]);
    }

    public function edit($id): View {
        $band = Band::findOrFail($id);
        $cities = City::all();
        $states = State::all();
        return view('bands.edit', ['band' => $band, 'cities' => $cities, 'states' => $states]);
    }

    public function patch_profile($id) {
        request()->validate([
            'name' => 'required|max:255|string',
            'fullname' => 'nullable|max:255|string',
            'excerpt' => 'nullable|max:255|string',
            'bio' => 'nullable|max:2000|string',
            'city_id' => 'nullable',
            'state_id' => 'nullable',
            'website_url' => 'nullable|max:255|string',
        ]);
        $band = Band::findOrFail($id);

        $band->update([
            'name' => request('name'),
            'fullname' => request('fullname'),
            'excerpt' => request('excerpt'),
            'bio' => request('bio'),
            'city_id' => request('city_id'),
            'state_id' => request('state_id'),
            'website_url' => request('website_url'),
        ]);

        return redirect('/bands');
    }

    public function patch_thumbnail($id) {
        request()->validate([
            'thumbnail_img' => 'nullable|mimes:jpg,jpeg,png,webp'
        ]);

        $band = Band::findOrFail($id);

        $thumbnail = '';
        if (request()->has('thumbnail_img')) {
            $thumbnailFile = request()->file('thumbnail_img');
            $ext = $thumbnailFile->getClientOriginalExtension();
            $thumbnailFilename = "band_" . $id . "_thumbnail_" . time() . $ext;
            $thumbnailPath = 'uploads/bands/';
            $thumbnailFile->move($thumbnailPath, $thumbnailFilename);
            $thumbnail = $thumbnailPath . $thumbnailFilename;
        }

        $band->update([
            'thumbnail_img' => $thumbnail
        ]);

        return redirect('/bands');
    }

    public function patch_banner($id) {
        request()->validate([
            'banner_img' => 'nullable|mimes:jpg,jpeg,png,webp'
        ]);

        $band = Band::find($id);

        $banner = '';
        if (request()->has('banner_img')) {
            $bannerFile = request()->file('banner_img');
            $ext = $bannerFile->getClientOriginalExtension();
            $bannerFilename = "band_" . $id . "_banner_" . time()  . $ext;
            $bannerPath = 'uploads/bands/';
            $bannerFile->move($bannerPath, $bannerFilename);
            $banner = $bannerPath . $bannerFilename;
        }

        $band->update([
            'banner_img' => $banner
        ]);

        return redirect('/bands');
    }

    public function delete($id): View {
        //
    }
}
