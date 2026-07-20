<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Band;
use App\Models\Venue;

class EventController extends Controller {
  public function index() {
    $_events = Event::with(['band', 'venue'])->get();

    $events = $_events->sortBy('event_date')
      ->groupBy('event_date');

    // dd($events);

    return view('events.index', ['events' => $events]);
  }

  public function show($id) {
    $event = Event::find($id);
    return view('events.show', ['event' => $event]);
  }
}
