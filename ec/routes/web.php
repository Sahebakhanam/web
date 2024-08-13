<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;






use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    
});
Route::get('/addblogPage', [BlogController::class, 'addblogPage'])->middleware(['auth', 'verified'])->name('addblogPage');
Route::post('/addblogPage', [BlogController::class, 'storeContent'])->middleware(['auth', 'verified'])->name('storeContent');
Route::get('/addfaq', [FaqController::class, 'addfaq'])->middleware(['auth', 'verified'])->name('addfaq');
Route::post('/addfaq', [FaqController::class, 'store'])->middleware(['auth', 'verified'])->name('addfaq.store');
Route::get('/contactDetail', [ContactController::class, 'showcontact'])->middleware(['auth', 'verified'])->name('showcontact');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('logout');

require __DIR__.'/auth.php';
Route::get('/about', function () {
    return view('mainpages.about');
});



// Dashboard pages 
Route::get('/contact', [ContactController::class, 'contactPage'])->name('contactPage');
Route::post('/contact', [ContactController::class, 'createcontact'])->name('contact.store');
Route::get('/blog', [BlogController::class, 'showBlog'])->name('showBlogs');
Route::get('/blog_detail/{id}', [BlogController::class, 'blog_detail'])->name('blog_detail');
Route::get('/ ', [PageController::class, 'index'])->name('home');
Route::get('/PrivacyPolicy ', [PageController::class, 'privacy'])->name('privacyPolicy');
Route::get('/career ', [PageController::class, 'career'])->name('career');

Route::get('/faq', [FaqController::class, 'faq'])->name('faq');

Route::get('/website-development', function () {
    return view('services.WebsiteDevelopment');
});

