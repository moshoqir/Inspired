<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/ar', function () {
    return view('indexAr');
})->name('arabic');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/* Contact Us */
Route::get('/#section_6', [ContactUsController::class, 'showForm'])->name('contact');


Route::group(['prefix' => 'ar'], function () {
    Route::get('/#section_6', [ContactUsController::class, 'showForm'])->name('contact.ar');
    Route::post('/ar', [ContactUsController::class, 'submitForm'])->name('contact.submit.ar');
});

Route::get('/#section_6', [ContactUsController::class, 'showForm'])->name('contact');
Route::post('/', [ContactUsController::class, 'submitForm'])->name('contact.submit');




require __DIR__ . '/auth.php';
