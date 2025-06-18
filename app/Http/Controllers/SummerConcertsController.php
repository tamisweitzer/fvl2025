<?php

namespace App\Http\Controllers;

use App\Models\SummerConcerts;
use Illuminate\Http\Request;

class SummerConcertsController extends Controller {
    public function index() {
        $concerts = SummerConcerts::all();

        return view('temp.concerts.index', ['concerts' => $concerts]);
    }

    // GET: get by id.
    public function show() {
        $tempconcerts = SummerConcerts::all();
        return view('temp.concerts.show', ['concerts' => $tempconcerts]);
    }

    // GET: get form to create a new concert.
    public function create() {
        return view('temp.concerts.create', []);
    }

    // POST: Add a new concert to the database.
    public function store(Request $request) {
        $request->validate([
            'concert_date' => 'required|date',
            'concert_time' => 'required|date',
            'band_list' => 'required|max:1000',
            'location_name' => 'required|max:255|string',
            'city' => 'required|max:100|string',
            'concert_url' => 'nullable|max:200|string'
        ]);

        SummerConcerts::create([
            'concert_date' => request('concert_date'),
            'concert_time' => request('concert_time'),
            'band_list' => request('band_list'),
            'location_name' => request('location_name'),
            'city' => request('city'),
            'concert_url' => request('concert_url'),
        ]);

        return redirect('/tempconcerts');
    }


    // POST/PATCH: Edit a concert.
    public function patch($id) {
        request()->validate([
            'concert_date' => 'required|date',
            'concert_time' => 'required|date',
            'band_list' => 'required|max:1000',
            'location_name' => 'required|max:255|string',
            'city' => 'required|max:100|string',
            'concert_url' => 'nullable|max:200|string'
        ]);

        $concert = SummerConcerts::findOrFail($id);

        $concert->update([
            'concert_date' => request('concert_date'),
            'concert_time' => request('concert_time'),
            'band_list' => request('band_list'),
            'location_name' => request('location_name'),
            'city' => request('city'),
            'concert_url' => request('concert_url'),
        ]);
    }

    // Delete
    public function delete($id) {
        $concert = SummerConcerts::findOrFail($id);
        $concert->delete();
        return redirect('/summer/concerts');
    }
}
