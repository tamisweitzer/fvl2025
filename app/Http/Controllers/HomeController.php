<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {
        $events = Event::all()->limit(15);
        return view('home', ['events' => $events]);
    }
}
