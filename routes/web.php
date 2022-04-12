<?php

use App\Models\message;
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
for craeate message
message::create(['text'=>'in message 5 man ast']);
*/

Route::get('/', function () {
	return view('welcome');
});
Route::get('/about', function () {
	$messages = message::all();
	return view('about', ['messages' => $messages]);
});
//inertia
Route::get('/contacts', function () {
	return inertia('contact');
});
Route::get('/hello', function () {
	return inertia('hello');
});
