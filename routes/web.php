<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TraderController;
use Illuminate\Support\Facades\Route;

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

//TICKET
Route::get("/api/tickets", [TicketController::class, "index"]);
Route::get('/api/tickets/{id}', [TicketController::class, 'show']);
Route::delete('/api/tickets/{id}', [TicketController::class, 'destroy']);
Route::post('/api/tickets', [TicketController::class, 'store']);
Route::put('/api/tickets/{id}', [TicketController::class, 'update']);
//EVENT
Route::get("/api/events", [EventController::class, "index"]);
Route::get('/api/events/{id}', [EventController::class, 'show']);
Route::delete('/api/events/{id}', [EventController::class, 'destroy']);
Route::post('/api/events', [EventController::class, 'store']);
Route::put('/api/events/{id}', [EventController::class, 'update']);
//TRADER
Route::get("/api/traders", [TraderController::class, "index"]);
Route::get('/api/traders/{id}', [TraderController::class, 'show']);
Route::delete('/api/traders/{id}', [TraderController::class, 'destroy']);
Route::post('/api/traders', [TraderController::class, 'store']);
Route::put('/api/traders/{id}', [TraderController::class, 'update']);
//traderBetu
Route::get("/api/traderBetu{betu}", [TraderController::class, "traderBetu"]);
//traderDb
Route::get("/api/traderDb", [TraderController::class, "traderDb"]);
