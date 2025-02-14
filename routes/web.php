<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
Route::get('/real_time_notifications', function () {
    return view('real_time_notifications');
});

Route::get('/send-notification', function () {
    event(new App\Events\RealTimeNotification('New notification!'));
    return response()->json(['status' => 'Notification sent!']);
});
////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
Route::get('/live_updates', function () {
    return view('live_updates');
});

Route::get('/update-data', function () {
    event(new App\Events\LiveUpdate('Data updated!'));
    return response()->json(['status' => 'Data updated!']);
});
////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
Route::get('/collaborative_features', function () {
    return view('collaborative_features');
});

Route::get('/collaborate', function () {
    event(new App\Events\CollaborativeUpdate('Collaborative update!'));
    return response()->json(['status' => 'Collaboration sent!']);
});
////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
Route::get('/event_driven_updates', function () {
    return view('event_driven_updates');
});

Route::get('/trigger-event', function () {
    event(new App\Events\EventDrivenUpdate('Event-driven update!'));
    return response()->json(['status' => 'Event triggered!']);
});
////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
Route::get('/gaming_interactive', function () {
    return view('gaming_interactive');
});

Route::get('/game-action', function () {
    event(new App\Events\GamingUpdate('Game action performed!'));
    return response()->json(['status' => 'Game action triggered!']);
});
////////////////////////////////////////////////////
////////////////////////////////////////////////////
////////////////////////////////////////////////////
    
Route::get('/activity_streams', function () {
    return view('activity_streams');
});
Route::get('/add-activity', function () {
    event(new App\Events\ActivityStream('New activity!'));
    return response()->json(['status' => 'Activity added!']);
});