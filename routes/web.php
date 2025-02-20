<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\EmailSignupController;


Route::get('/', function () {
    return view('welcome');
});

/// test data
$events = [['bandName' => 'Band one', 'venueName' => 'Old Mill', 'city' => 'Appleton', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band two', 'venueName' => 'Reggie\'s', 'city' => 'Oshkosh', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band three', 'venueName' => 'Fat Joe\'s', 'city' => 'Appleton', 'date' => '2-22-2025', 'time' => '8:00 pm'], ['bandName' => 'Band four', 'venueName' => 'Gentleman Jack\'s', 'city' => 'Grand Chute', 'date' => '2-23-2025', 'time' => '8:00 pm'], ['bandName' => 'Band five', 'venueName' => 'Happy Frog', 'city' => 'Green Bay', 'date' => '2-23-2025', 'time' => '8:00 pm']];

Route::get('/home', function () {
    return view('home', ['events' => $events = [['bandName' => 'Band one', 'venueName' => 'Old Mill', 'city' => 'Appleton', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band two', 'venueName' => 'Reggie\'s', 'city' => 'Oshkosh', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band three', 'venueName' => 'Fat Joe\'s', 'city' => 'Appleton', 'date' => '2-22-2025', 'time' => '8:00 pm'], ['bandName' => 'Band four', 'venueName' => 'Gentleman Jack\'s', 'city' => 'Grand Chute', 'date' => '2-23-2025', 'time' => '8:00 pm'], ['bandName' => 'Band five', 'venueName' => 'Happy Frog', 'city' => 'Green Bay', 'date' => '2-23-2025', 'time' => '8:00 pm']]]);
});

Route::get('/face1', function () {
    return view('face1', ['events' => $events = [['bandName' => 'Band one', 'venueName' => 'Old Mill', 'city' => 'Appleton', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band two', 'venueName' => 'Reggie\'s', 'city' => 'Oshkosh', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band three', 'venueName' => 'Fat Joe\'s', 'city' => 'Appleton', 'date' => '2-22-2025', 'time' => '8:00 pm'], ['bandName' => 'Band four', 'venueName' => 'Gentleman Jack\'s', 'city' => 'Grand Chute', 'date' => '2-23-2025', 'time' => '8:00 pm'], ['bandName' => 'Band five', 'venueName' => 'Happy Frog', 'city' => 'Green Bay', 'date' => '2-23-2025', 'time' => '8:00 pm']]]);
});

Route::get('/face2', function () {
    return view('face2', ['events' => $events = [['bandName' => 'Band one', 'venueName' => 'Old Mill', 'city' => 'Appleton', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band two', 'venueName' => 'Reggie\'s', 'city' => 'Oshkosh', 'date' => '2-15-2025', 'time' => '8:00 pm'], ['bandName' => 'Band three', 'venueName' => 'Fat Joe\'s', 'city' => 'Appleton', 'date' => '2-22-2025', 'time' => '8:00 pm'], ['bandName' => 'Band four', 'venueName' => 'Gentleman Jack\'s', 'city' => 'Grand Chute', 'date' => '2-23-2025', 'time' => '8:00 pm'], ['bandName' => 'Band five', 'venueName' => 'Happy Frog', 'city' => 'Green Bay', 'date' => '2-23-2025', 'time' => '8:00 pm']]]);
});

Route::get('/bands', [BandController::class, 'index']);
Route::get('/bands/create', [BandController::class, 'create']);
Route::post('bands/create', [BandController::class, 'store']);
Route::get('/bands/{id}', [BandController::class, 'show']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show']);

Route::get('venues', [VenueController::class, 'index']);
Route::get('venues/{id}', [VenueController::class, 'show']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/{year}/{mon}', [EventController::class, 'archivemonth']);


Route::get('email-signup', [EmailSignupController::class, 'index']);
Route::post('/email-signup', [EmailSignupController::class, 'store']);
