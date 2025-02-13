<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller {
    public function show(): View {
        return view('bands', ['bands' => Band::all()]);
    }

    public function find($id): View {
        $band = Band::find($id);
        return view('band', ['band' => $band]);
    }

    public function insertMany() {
        DB::table('bands')->insert([
            ['key' => 'value', 'key2' => 'val2'],
        ]);
    }
}
