<?php

use App\Http\Livewire\ArtikelController;
use App\Http\Livewire\CareerController;
use App\Http\Livewire\ContactUsController;
use App\Http\Livewire\DetailArtikel;
use App\Http\Livewire\HomeController;
use App\Http\Livewire\LatestBriefController;
use App\Http\Livewire\LatestReportController;
use App\Http\Livewire\PortofolioController;
use App\Http\Livewire\WorkingPaperController;
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
*/

Route::get('/test', function(){
    return view('layouts.app');
});

Route::get('/', HomeController::class);

Route::get('/portofolio', PortofolioController::class);

Route::get('/working-paper', WorkingPaperController::class);

Route::get('/latest-brief', LatestBriefController::class);

Route::get('/latest-report', LatestReportController::class);

Route::get('/artikel', ArtikelController::class);

Route::get('/artikel/cat/{category}', ArtikelController::class);

Route::get('/artikel/{artikel}', DetailArtikel::class);

Route::get('/career', CareerController::class);

Route::get('/contact', ContactUsController::class);

Route::fallback(function(){
    abort(404);
}); 