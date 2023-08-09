<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

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


Route::get('/', [EventController::class, 'index'] );
Route::get('/events/create', [EventController::class, 'create'] );
Route::post('/events', [EventController::class, 'store'] );


Route::get('/contact',  function(){
    return View('layouts.contact');
} );



