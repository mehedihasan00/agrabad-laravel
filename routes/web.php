<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;


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
Route::post('team/update/{id}', [TeamController::class, 'teamUpdate'])->name('update.team');
Route::get('team/delete/{id}', [TeamController::class, 'teamDelete']);
// Gallery Route
Route::post('gallery/insert', [GalleryController::class, 'galleryInsert'])->name('store.gallery');
Route::get('gallery/edit/{id}', [GalleryController::class, 'galleryEdit'])->name('edit.gallery');
Route::post('gallery/update/{id}', [GalleryController::class, 'galleryUpdate'])->name('update.gallery');
Route::get('gallery/delete/{id}', [GalleryController::class, 'galleryDelete']);
// Video Route
Route::post('video/insert', [VideoController::class, 'videoInsert'])->name('store.video');
Route::get('video/edit/{id}', [VideoController::class, 'videoEdit'])->name('edit.video');
Route::post('video/update/{id}', [VideoController::class, 'videoUpdate'])->name('update.video');
Route::get('video/delete/{id}', [VideoController::class, 'videoDelete'])->name('delete.video');



Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('adminDashboard');
    Route::get('/admin/slider', [SliderController::class, 'slider']);
    Route::get('/admin/service', [ServiceController::class, 'service']);
    Route::get('/admin/team', [TeamController::class, 'team']);
    Route::get('/admin/gallery', [GalleryController::class, 'gallery']);
    Route::get('/admin/video', [VideoController::class, 'video']);
});
