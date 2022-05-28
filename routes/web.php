<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MessageController;



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
Route::post('slider/update/{id}', [SliderController::class, 'sliderUpdate'])->name('update.slider');
Route::get('slider/delete/{id}', [SliderController::class, 'sliderDelete'])->name('delete.slider');
// Services Route
Route::post('service/insert', [ServiceController::class, 'serviceInsert'])->name('store.service');
Route::get('service/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('edit.service');
Route::post('service/update/{id}', [ServiceController::class, 'serviceUpdate'])->name('update.service');
Route::get('service/delete/{id}', [ServiceController::class, 'serviceDelete'])->name('delete.service');
// Team Route
Route::post('team/insert', [TeamController::class, 'teamInsert'])->name('store.team');
Route::get('team/edit/{id}', [TeamController::class, 'teamEdit'])->name('edit.team');
Route::post('team/update/{id}', [TeamController::class, 'teamUpdate'])->name('update.team');
Route::get('team/delete/{id}', [TeamController::class, 'teamDelete'])->name('delete.team');
// Gallery Route
Route::post('gallery/insert', [GalleryController::class, 'galleryInsert'])->name('store.gallery');
Route::get('gallery/edit/{id}', [GalleryController::class, 'galleryEdit'])->name('edit.gallery');
Route::post('gallery/update/{id}', [GalleryController::class, 'galleryUpdate'])->name('update.gallery');
Route::get('gallery/delete/{id}', [GalleryController::class, 'galleryDelete'])->name('delete.gallery');
// Video Route
Route::post('video/insert', [VideoController::class, 'videoInsert'])->name('store.video');
Route::get('video/edit/{id}', [VideoController::class, 'videoEdit'])->name('edit.video');
Route::post('video/update/{id}', [VideoController::class, 'videoUpdate'])->name('update.video');
Route::get('video/delete/{id}', [VideoController::class, 'videoDelete'])->name('delete.video');
// Client Route
Route::post('client/insert', [ClientController::class, 'clientInsert'])->name('store.client');
Route::get('client/edit/{id}', [ClientController::class, 'clientEdit'])->name('edit.client');
Route::post('client/update/{id}', [ClientController::class, 'clientUpdate'])->name('update.client');
Route::get('client/delete/{id}', [ClientController::class, 'clientDelete'])->name('delete.client');
// Message Route
Route::post('message/insert', [MessageController::class, 'messageInsert'])->name('store.message');
Route::get('message/edit/{id}', [MessageController::class, 'messageEdit'])->name('edit.message');
Route::post('message/update/{id}', [MessageController::class, 'messageUpdate'])->name('update.message');
Route::get('message/delete/{id}', [MessageController::class, 'messageDelete'])->name('delete.message');
// Setting
Route::post('/setting/update/{id}', [SettingController::class, 'settingUpdate'])->name('setting.update');


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('adminDashboard');
    Route::get('/admin/slider', [SliderController::class, 'slider'])->name('slider');
    Route::get('/admin/service', [ServiceController::class, 'service']);
    Route::get('/admin/team', [TeamController::class, 'team']);
    Route::get('/admin/gallery', [GalleryController::class, 'gallery']);
    Route::get('/admin/video', [VideoController::class, 'video']);
    Route::get('/admin/setting', [SettingController::class, 'setting']);
    Route::get('/admin/client', [ClientController::class, 'client']);
    Route::get('/admin/message', [MessageController::class, 'message']);
});
