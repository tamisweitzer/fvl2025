<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\SummerEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller {
    public function index() {
        // $events = Event::all();
        $events = SummerEvents::all()
            ->where('event_type', '=', 'is_bar_gig')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date')
            ->take(3);

        $lunches = SummerEvents::all()
            ->where('event_type', '=', 'is_lunch_gig')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date')
            ->take(3);

        $series = SummerEvents::all()
            ->where('event_type', '=', 'is_series')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date')
            ->take(3);

        $fairs = SummerEvents::all()
            ->where('event_type', '=', 'is_fair')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date')
            ->take(3);

        $nationalActs = SummerEvents::all()
            ->where('event_type', "=", 'is_national_act')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date')
            ->take(3);

        return view('home', [
            'events' => $events,
            'lunches' => $lunches,
            'series' => $series,
            'fairs' => $fairs,
            'nationalActs' => $nationalActs
        ]);
    }
}
