<?php


use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmailSignupController;
use App\Http\Controllers\RegisteredUserController;



/// test data
$events = [
    ['bandName' => 'Band one', 'venueName' => 'Old Mill', 'city' => 'Appleton', 'date' => '2-15-2025', 'time' => '8:00 pm'],
    ['bandName' => 'Band two', 'venueName' => 'Reggie\'s', 'city' => 'Oshkosh', 'date' => '2-15-2025', 'time' => '8:00 pm'],
    ['bandName' => 'Band three', 'venueName' => 'Fat Joe\'s', 'city' => 'Appleton', 'date' => '2-22-2025', 'time' => '8:00 pm'],
    ['bandName' => 'Band four', 'venueName' => 'Gentleman Jack\'s', 'city' => 'Grand Chute', 'date' => '2-23-2025', 'time' => '8:00 pm'],
    ['bandName' => 'Band five', 'venueName' => 'Happy Frog', 'city' => 'Green Bay', 'date' => '2-23-2025', 'time' => '8:00 pm']
];


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', function () {
    return view('home', ['events' => Event::all()]);
});

// The Lita page.
Route::get('/face1', function () {
    return view('face1', ['events' => Event::all()]);
});

// The colorful page.
Route::get('/face2', function () {
    return view('face2', ['events' => Event::all()]);
});





Route::get('/bands',        [BandController::class, 'index']);
Route::get('/bands/create', [BandController::class, 'create']);
Route::post('/bands/create', [BandController::class, 'store']);
Route::get('/bands/{id}',   [BandController::class, 'show']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show']);

Route::get('/states', [StateController::class, 'index']);
Route::get('/states/{id}', [StateController::class, 'show']);

Route::get('venues', [VenueController::class, 'index']);
Route::get('venues/{id}', [VenueController::class, 'show']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// Login
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

// Email list.
Route::get('/email-signup', [EmailSignupController::class, 'index']);
Route::post('/email-signup', [EmailSignupController::class, 'store']);
