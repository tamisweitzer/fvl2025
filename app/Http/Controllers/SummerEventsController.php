<?php

namespace App\Http\Controllers;

use App\Models\SummerEvents;
use Illuminate\Http\Request;

class SummerEventsController extends Controller {

    public function index() {
        $events = SummerEvents::all()->where('event_type', '=', 'is_bar_gig');
        $lunches = SummerEvents::all()->where('event_type', '=', 'is_lunch_gig');
        $series = SummerEvents::all()->where('event_type', '=', 'is_series');
        $fairs = SummerEvents::all()->where('event_type', '=', 'is_fairs');

        return view('summer.events.index', [
            'events' => $events,
            'lunches' => $lunches,
            'series' => $series,
            'fairs' => $fairs
        ]);
    }

    public function show($id) {
        $event = SummerEvents::find($id);
        return view('summer.events.show', ['event' => $event]);
    }

    public function create() {
        return view('summer.events.create', []);
    }

    public function store(Request $request) {

        // dd($request->all());

        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'start_time' => 'nullable|string',
            'band' => 'required|max:1024|string',
            'event_name' => 'nullable|max:1024|string',
            'venue' => 'required|max:1024|string',
            'city' => 'required|max:100|string',
            'url' => 'nullable|max:255|string',
            'notes' => 'nullable|max:1024|string',
            'event_type' => 'nullable|string'
        ]);

        SummerEvents::create([
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
            'start_time' => request('start_time'),
            'band' => request('band'),
            'event_name' => request('event_name'),
            'venue' => request('venue'),
            'city' => request('city'),
            'url' => request('url'),
            'notes' => request('notes'),
            'event_type' => request('event_type'),
        ]);

        return redirect('/summer/events');
    }
}
