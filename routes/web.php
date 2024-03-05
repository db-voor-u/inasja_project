<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use function Laravel\Prompts\progress;

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
    return view('Home');
})->name('home');

Route::get('/wiebenik', function () {
    return view('Wiebenik');
})->name('wiebenik');

Route::get('/aanbod', function () {
    return view('Aanbod');
})->name('aanbod');

Route::get('/postcast', function () {
    return view('Podcast');
    sleep(3);
})->name('podcast');

Route::get('/werkzaamheden', function () {
    return view('Werkzaamheden');
})->name('werkzaamheden');

Route::get('/coaching', function () {
    return view('Coaching');
})->name('coaching');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');

Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send-mail');

