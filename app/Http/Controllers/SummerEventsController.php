<?php

namespace App\Http\Controllers;

use App\Models\SummerEvents;
use Illuminate\Http\Request;

class SummerEventsController extends Controller {

    public function index() {
        $events = SummerEvents::all();
        return view('summer.events.index', ['events' => $events]);
    }

    public function show($id) {
        $event = SummerEvents::find($id);
        return view('summer.events.show', ['event' => $event]);
    }

    public function create() {
        return view('summer.events.create', []);
    }
}
