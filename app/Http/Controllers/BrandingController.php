<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SummerEvents;
use Illuminate\Support\Facades\Date;

class BrandingController extends Controller {
    public function index() {
        $events = SummerEvents::all()
            ->where('start_date', '>=', Date::today())
            ->sortBy('start_date')
            ->groupBy('start_date');
        return view('branding.index', ['eventsToday' => $events]);
    }
}
