<?php

namespace App\Http\Controllers;

use App\Models\EmailSignup;
use Illuminate\Http\Request;

class EmailSignupController extends Controller {

    public function index() {
        return view('email-signup');
    }
    public function store() {
        EmailSignup::create([
            'name' => request('name'),
            'email' => request('email')
        ]);

        return redirect('/email-signup');
    }
}
