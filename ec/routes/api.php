<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// <web class="php"></web>
// use App\Http\Controllers\UserAuth;
// use App\Http\Middleware\CustomAuth;
// use App\Http\Middleware\PreventAccessAfterLogout;


// Route::group(['middleware' => ['web', 'prevent.access']],function(){
//     Route::get('/dashboard', [NewmemberController::class, 'shownewmember'])->name('dashboardpage');
//     Route::post('/marquee', [MarqueeController::class, 'createmarquee'])->name('createmarquee');
//     Route::post('/deletemarquee/{id}', [MarqueeController::class, 'deletemarquee']);
//     Route::post('/deleteDonation/{id}', [ContactController::class, 'deleteDonation']);
//     Route::get('/slider', [SliderController::class, 'slider'])->name('sliderpage');
//     Route::post('/slider', [SliderController::class, 'addslider']);
    
//     Route::post('/editblog', [BlogController::class, 'createblog']);
//     Route::get('/donation', [ContactController::class, 'showcontact'])->name('donationpage');
//     Route::get('/editblog', [BlogController::class, 'indexblog'])->name('editblogpage');
//     Route::get('/marquee', [MarqueeController::class, 'indexmarquee'])->name('marqueepage');

// });    

// Route::post('/login', [DashboardPageController::class,'login']);
// Route::get('/logout', [DashboardPageController::class, 'logout'])->name('logout');


