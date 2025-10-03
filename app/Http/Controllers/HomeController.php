<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\SummerEvents;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller {
    public function index() {


        $eventsToday = SummerEvents::all()
            ->where('start_date', '=', Date::today())
            ->sortBy('start_time')
            ->groupBy('start_date');


        $events = SummerEvents::all()
            ->where('event_type', '=', 'is_bar_gig')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->take(3)
            ->groupBy('start_date');

        $lunches = SummerEvents::all()
            ->where('event_type', '=', 'is_lunch_gig')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->take(3)
            ->groupBy('start_date');

        $series = SummerEvents::all()
            ->where('event_type', '=', 'is_series')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->take(3)
            ->groupBy('start_date');

        $fairs = SummerEvents::all()
            ->where('event_type', '=', 'is_fair')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->take(3)
            ->groupBy('start_date');

        $nationalActs = SummerEvents::all()
            ->where('event_type', "=", 'is_national_act')
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->take(3)
            ->groupBy('start_date');

        return view('home', [
            'eventsToday' => $eventsToday,
            'events' => $events,
            'lunches' => $lunches,
            'series' => $series,
            'fairs' => $fairs,
            'nationalActs' => $nationalActs
        ]);
    }
}
