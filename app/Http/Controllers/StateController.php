<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\State;

class StateController extends Controller {

    public function index(): View {
        return view('states.index', ['states' => State::all()]);
    }

    public function show($id): View {
        $state = State::find($id);
        return view('states.show', ['state' => $state]);
    }
}
