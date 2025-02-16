<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller {
    public function index(): View {
        $bands = Band::with(['city', 'state'])->get();

        return view('bands.index', ['bands' => $bands]);
    }

    public function show($id): View {
        $band = Band::find($id);
        return view('bands.show', ['band' => $band]);
    }
}
