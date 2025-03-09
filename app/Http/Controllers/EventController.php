<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller {
  public function index() {
    return view('events.index', ['events' => Event::all()]);
  }

  public function show($id) {
    $event = Event::find($id);
    return view('events.show', ['event' => $event]);
  }
}
