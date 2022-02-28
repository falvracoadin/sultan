<?php

use App\Http\Controllers\LoginController;
use App\Http\Livewire\Admin\Artikel\CreateArtikel;
use App\Http\Livewire\Admin\Artikel\CreateKategoriArtikel;
use App\Http\Livewire\Admin\Artikel\GetArtikel;
use App\Http\Livewire\Admin\Artikel\GetKategoriArtikel;
use App\Http\Livewire\Admin\Artikel\UpdateArtikel;
use App\Http\Livewire\ArtikelController;
use App\Http\Livewire\CareerController;
use App\Http\Livewire\ContactUsController;
use App\Http\Livewire\DetailArtikel;
use App\Http\Livewire\HomeController;
use App\Http\Livewire\LatestBriefController;
use App\Http\Livewire\LatestReportController;
use App\Http\Livewire\PortofolioController;
use App\Http\Livewire\WorkingPaperController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
});

ROute::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/artikel', GetArtikel::class);
    Route::get('/artikel/create',CreateArtikel::class);
    Route::get('/artikel/{artikel}', UpdateArtikel::class);
    
    Route::get('/kategori-artikel', GetKategoriArtikel::class);
    Route::get('/kategori-artikel/create', CreateKategoriArtikel::class);
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

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])
    ->middleware('guest');

Route::fallback(function(){
    abort(404);
}); 