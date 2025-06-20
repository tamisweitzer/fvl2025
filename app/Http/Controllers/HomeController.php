<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\SummerEvents;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        // $events = Event::all();
        $events = SummerEvents::all()->where('event_type', '=', 'is_bar_gig')->sortBy('start_date');
        $lunches = SummerEvents::all()->where('event_type', '=', 'is_lunch_gig')->sortBy('start_date');
        $series = SummerEvents::all()->where('event_type', '=', 'is_series')->sortBy('start_date');
        $fairs = SummerEvents::all()->where('event_type', '=', 'is_fair')->sortBy('start_date');

        return view('home', [
            'events' => $events,
            'lunches' => $lunches,
            'series' => $series,
            'fairs' => $fairs
        ]);
    }
}
