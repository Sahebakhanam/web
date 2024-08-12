<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/about', function () {
    return view('mainpages.about');
});
Route::get('/blog', function () {
    return view('mainpages.blog');
});

Route::get('/faq', function () {
    return view('mainpages.faq');
});

// Dashboard pages 
Route::get('/contact', [ContactController::class, 'contactPage'])->name('contactPage');
Route::post('/contact', [ContactController::class, 'createcontact'])->name('contact.store');
Route::get('/contactDetail', [ContactController::class, 'showcontact'])->name('showcontact');
Route::get('/addblogPage', [BlogController::class, 'addblogPage'])->name('addblogPage');
Route::post('/addblogPage', [BlogController::class, 'storeContent'])->name('storeContent');
// Route::get('/showBlogs', [BlogController::class, 'showBlogs'])->name('showBlogs');