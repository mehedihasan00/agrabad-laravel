<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;

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
// Route::get('/', function () {
//     return view('welcome');
// });


// Frontend
Route::get('/', [WebController::class, 'contents'])->name('home');
Route::get('/aboutUs', [WebController::class, 'aboutUs'])->name('aboutUs');
Route::get('/service', [WebController::class, 'service'])->name('service');
Route::get('/serviceDetail', [WebController::class, 'serviceDetail'])->name('serviceDetail');
Route::get('/team', [WebController::class, 'team'])->name('team');
Route::get('/gallery', [WebController::class, 'gallery'])->name('gallery');
Route::get('/videoGallery', [WebController::class, 'videoGallery'])->name('videoGallery');

// Backend start here
// slider route
Route::post('slider/insert', [SliderController::class, 'sliderInsert'])->name('store.slider');
Route::get('slider/edit/{id}', [SliderController::class, 'sliderEdit'])->name('edit.slider');
Route::post('slider/update/{id}', [SliderController::class, 'sliderUpdate']);
Route::get('slider/delete/{id}', [SliderController::class, 'sliderDelete']);
// Services Route
Route::post('service/insert', [ServiceController::class, 'serviceInsert'])->name('store.service');
Route::get('service/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('edit.service');
Route::post('service/update/{id}', [ServiceController::class, 'serviceUpdate']);
Route::get('service/delete/{id}', [ServiceController::class, 'serviceDelete']);
// Team Route
Route::post('team/insert', [TeamController::class, 'teamInsert'])->name('store.team');
Route::get('team/edit/{id}', [TeamController::class, 'teamEdit'])->name('edit.team');
Route::post('team/update/{id}', [TeamController::class, 'teamUpdate']);
Route::get('team/delete/{id}', [TeamController::class, 'teamDelete']);

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('adminDashboard');
    Route::get('/admin/slider', [SliderController::class, 'slider']);
    Route::get('/admin/service', [ServiceController::class, 'service']);
    Route::get('/admin/team', [TeamController::class, 'team']);
});
