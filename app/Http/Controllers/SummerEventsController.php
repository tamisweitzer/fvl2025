<?php

namespace App\Http\Controllers;

use App\Models\SummerEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class SummerEventsController extends Controller {

    public function index() {
        $events = SummerEvents::all()
            ->where('start_date', '>=', Date::today())
            ->groupBy('start_date')
            ->sortBy('start_date');
        return view('summer.events.index', ['events' => $events]);
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

        return view('summer.events.create', []);
    }


    public function edit($id) {
        $event = SummerEvents::findOrFail($id);
        return view('summer.events.edit', ['event' => $event]);
    }

    public function patch($id) {
        request()->validate([
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

        $event = SummerEvents::findOrFail($id);

        $event->update([
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

        return view('summer.events.show', ['event' => $event]);
    }

    public function destroy($id) {
        // return ("to do");
        $event = SummerEvents::findOrFail($id);
        $event->delete();
        return redirect('/summer/events');
    }


    // These routes provide additional interactivity until the site can be properly built out.
    public function barsIndex() {
        $events = SummerEvents::all()
            ->where('event_type', 'is_bar_gig')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');
        return view('summer.events.barsindex', ['events' => $events]);
    }

    public function lunchtimeIndex() {
        $events = SummerEvents::all()
            ->where('event_type', 'is_lunch_gig')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');
        return view('summer.events.lunchesindex', ['events' => $events]);
    }

    public function fairsIndex() {
        $events = SummerEvents::all()
            ->where('event_type', 'is_fair')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');
        return view('summer.events.fairsindex', ['events' => $events]);
    }

    public function nationalIndex() {
        $events = SummerEvents::all()
            ->where('event_type', 'is_national_act')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');
        return view('summer.events.nationalactsindex', ['events' => $events]);
    }


    public function listBands() {
        $bands = SummerEvents::select('id', 'band')
            ->where('start_date', '>=', Date::today())
            ->orderBy('band', 'ASC')
            ->groupBy('band')
            ->get()
            ->sortBy('band', SORT_NATURAL | SORT_FLAG_CASE);

        return view('summer.events.listbands', ['bands' => $bands]);
    }

    public function listCities() {
        $cities = SummerEvents::select('id', 'city')
            ->where('start_date', '>=', Date::today())
            ->orderBy('city', 'ASC')
            ->groupBy(groups: 'city')
            ->get()
            ->sortBy('city', SORT_NATURAL | SORT_FLAG_CASE);

        return view('summer.events.listcities', ['cities' => $cities]);
    }

    public function listVenues() {
        $venues = SummerEvents::select('id', 'venue')
            ->where('start_date', '>=', Date::today())
            ->orderBy('venue', 'ASC')
            ->groupBy('venue')
            ->get()
            ->sortBy('city', SORT_NATURAL | SORT_FLAG_CASE);

        return view('summer.events.listvenues', ['venues' => $venues]);
    }

    public function listEventNames() {
        $events = SummerEvents::select('id', 'event_name')
            ->where('start_date', '>=', Date::today())
            ->orderBy('event_name', 'ASC')
            ->groupBy('event_name')
            ->get()
            ->sortBy('event_name', SORT_NATURAL | SORT_FLAG_CASE);

        return view('summer.events.listeventnames', ['events' => $events]);
    }

    public function showBand($id) {
        $band = SummerEvents::findOrFail($id);
        $events = SummerEvents::all()
            ->where('band', $band->band)
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');

        return view('summer.events.showband', ['events' => $events]);
    }
    public function showVenue($id) {
        $venue = SummerEvents::findOrFail($id);
        $events = SummerEvents::all()
            ->where('venue', $venue->venue)
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');

        return view('summer.events.showvenue', ['events' => $events]);
    }

    public function showCity($id) {
        $event = SummerEvents::findOrFail($id);
        $events = SummerEvents::all()
            ->where('city', $event->city)
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');

        return view('summer.events.showcity', ['events' => $events]);
    }

    public function showEvent($id) {
        $event = SummerEvents::findOrFail($id);
        $events = SummerEvents::all()
            ->where('event_name', $event->event_name)
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');

        return view('summer.events.showevent', ['events' => $events]);
    }
}
