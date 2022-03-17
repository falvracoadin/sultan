<?php

use App\Http\Controllers\LoginController;
use App\Http\Livewire\Admin\Artikel\GetArtikel;
use App\Http\Livewire\Admin\Auth\ResetPassword;
use App\Http\Livewire\Admin\Banner\GetBanner;
use App\Http\Livewire\Admin\Portofolio\GetPortofolio;
use App\Http\Livewire\Admin\Servis\GetServis;
use App\Http\Livewire\Admin\Staff\GetStaff;
use App\Http\Livewire\ArtikelController;
use App\Http\Livewire\CareerController;
use App\Http\Livewire\ContactUs\GetContatctUs;
use App\Http\Livewire\ContactUsController;
use App\Http\Livewire\DetailArtikel;
use App\Http\Livewire\DetailPortofolio;
use App\Http\Livewire\HomeController;
use App\Http\Livewire\LatestBriefController;
use App\Http\Livewire\LatestReportController;
use App\Http\Livewire\PortofolioController;
use App\Http\Livewire\WorkingPaperController;
use App\Models\Visit;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['visitable'])->group(function () {

    Route::get('/test', function () {
        dd(Visit::countVisitorByCountry());
    });
    Route::get('/admin', function () {
        return redirect('/login');
    });
    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/artikel', GetArtikel::class);
        Route::get('/banner', GetBanner::class);
        Route::get('/portofolio', GetPortofolio::class);
        Route::get('/staff', GetStaff::class);
        Route::get('/servis', GetServis::class);
        Route::get('/contact-us', GetContatctUs::class);

        Route::get('/logout', function () {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            return redirect('/');
        });
    });


    Route::get('/ubah-password', ResetPassword::class)
        ->middleware(['guest']);

    Route::get('/ubah-password/{token}', ResetPassword::class)
        ->middleware(['guest']);

    Route::get('/', HomeController::class);

    Route::get('/portofolio', PortofolioController::class);

    Route::get('/portofolio/{portofolio}', DetailPortofolio::class);

    Route::get('/working-paper', WorkingPaperController::class);

    Route::get('/latest-brief', LatestBriefController::class);

    Route::get('/latest-report', LatestReportController::class);

    Route::get('/artikel', ArtikelController::class);

    Route::get('/artikel/cat/{category}', ArtikelController::class);

    Route::get('/artikel/{artikel}', DetailArtikel::class);

    Route::get('/career', CareerController::class);

    Route::get('/contact', ContactUsController::class);

    Route::post('/contact', ContactUsController::class);

    Route::get('/login', [LoginController::class, 'index'])
        ->name('login')
        ->middleware('guest');

    Route::post('/login', [LoginController::class, 'login'])
        ->middleware('guest');

    Route::fallback(function () {
        return redirect('/');
    });
});