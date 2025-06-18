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
use App\Http\Controllers\TempFairsController;
use App\Http\Controllers\TempEventsController;
use App\Http\Controllers\EmailSignupController;
use App\Http\Controllers\TempConcertsController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\TempDayConcertsController;

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




// Temporary routes to use to quickly add events while the rest of the site if being built out.
// Summer Concerts
Route::get('/tempconcerts', [TempConcertsController::class, 'index']);
Route::get('/tempconcerts/{id}', [TempConcertsController::class, 'show']);
Route::get('/tempconcerts/create', [TempConcertsController::class, 'create']);
Route::post('/tempconcerts/create', [TempConcertsController::class, 'store']);
Route::get('/tempconcerts/{id}/edit', [TempConcertsController::class, 'edit']);
Route::patch('/tempconcerts/{id}/edit', [TempConcertsController::class, 'patch']);
Route::delete('/tempconcerts/{id}/delete', [TempConcertsController::class, 'delete']);
// Summer Day Concerts
Route::get('/tempdayconcerts', [TempDayConcertsController::class, 'index']);
Route::get('/tempdayconcerts/{id}', [TempDayConcertsController::class, 'show']);
Route::get('/tempdayconcerts/create', [TempDayConcertsController::class, 'create']);
Route::post('/tempdayconcerts/create', [TempDayConcertsController::class, 'store']);
Route::get('/tempdayconcerts/{id}/edit', [TempDayConcertsController::class, 'edit']);
Route::patch('/tempdayconcerts/{id}/edit', [TempDayConcertsController::class, 'patch']);
Route::delete('/tempdayconcerts/{id}/delete', [TempDayConcertsController::class, 'delete']);
// Events - standard bars and restaurants
Route::get('/tempevents', [TempEventsController::class, 'index']);
Route::get('/tempevents/{id}', [TempEventsController::class, 'show']);
Route::get('/tempevents/create', [TempEventsController::class, 'create']);
Route::post('/tempevents/create', [TempEventsController::class, 'store']);
Route::get('/tempevents/{id}/edit', [TempEventsController::class, 'edit']);
Route::patch('/tempevents/{id}/edit', [TempEventsController::class, 'patch']);
Route::delete('/tempevents/{id}/delete', [TempEventsController::class, 'delete']);
// Fairs
Route::get('/tempfairs', [TempFairsController::class, 'index']);
Route::get('/tempfairs/{id}', [TempFairsController::class, 'show']);
Route::get('/tempfairs/create', [TempFairsController::class, 'create']);
Route::post('/tempfairs/create', [TempFairsController::class, 'store']);
Route::get('/tempfairs/{id}/edit', [TempFairsController::class, 'edit']);
Route::patch('/tempfairs/{id}/edit', [TempFairsController::class, 'patch']);
Route::delete('/tempfairs/{id}/delete', [TempFairsController::class, 'delete']);
// End temporary routes.






// Bands
Route::get('/bands',        [BandController::class, 'index']);
Route::get('/bands/{id}',   [BandController::class, 'show']);
Route::get('/bands/create', [BandController::class, 'create']);
Route::post('/bands/create', [BandController::class, 'store']);
Route::get('/bands/{id}/edit',   [BandController::class, 'edit']);
Route::patch('/bands/{id}/profile', [BandController::class, 'patch_profile']);
Route::patch('/bands/{id}/thumbnail', [BandController::class, 'patch_thumbnail']);
Route::patch('/bands/{id}/banner', [BandController::class, 'patch_banner']);
Route::delete('/bands/{id}', [BandController::class, 'delete']);

// Venues
Route::get('venues', [VenueController::class, 'index']);
Route::get('venues/{id}', [VenueController::class, 'show']);

// Events
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

// Cities
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show']);

// States
Route::get('/states', [StateController::class, 'index']);
Route::get('/states/{id}', [StateController::class, 'show']);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// Login
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

// Form on front page to get added to email list.
Route::get('/email-signup', [EmailSignupController::class, 'index']);
Route::post('/email-signup', [EmailSignupController::class, 'store']);
