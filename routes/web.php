<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    $event = new Event;

	$event->name = 'A new event';
	$event->startDateTime = Carbon\Carbon::now();
	$event->endDateTime = Carbon\Carbon::now()->addHour();

	$event->save();

	   // $event=Event::get();
	   // dd($event);

});

Route::resource('booking', BookingController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
