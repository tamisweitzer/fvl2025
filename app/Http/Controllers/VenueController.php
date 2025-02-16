<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller {
  public function index() {
    return view('venues.index', ['venues' => Venue::all()]);
  }

  public function show($id) {
    $venue = Venue::find($id);
    return view('venues.show', ['venue' => $venue]);
  }
}
