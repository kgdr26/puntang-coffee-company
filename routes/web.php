<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administrator\AuthController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\HomeLandingController;
use App\Http\Controllers\Administrator\AcvEventCOntroller;
use App\Http\Controllers\Administrator\AcvCSRController;
use App\Http\Controllers\Administrator\GeneralSettingController;
use App\Http\Controllers\Administrator\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActivityController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/ourproduct', [ProductController::class, 'index'])->name('ourproduct');
Route::get('/processingproduct', [ProductController::class, 'proccesing'])->name('processingproduct');
Route::match(['get', 'post'], '/getajaxdetailprod', [ProductController::class, 'getajaxdetailprod'])->name('getajaxdetailprod');

Route::get('/event', [ActivityController::class, 'index'])->name('event');
Route::match(['get', 'post'], '/getevent', [ActivityController::class, 'getEvent'])->name('getevent');


Route::get('/csr', [ActivityController::class, 'csr'])->name('csr');
Route::get('/program', [ActivityController::class, 'program'])->name('program');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::prefix('administrator')->group(function(){

    Route::get('/login',[AuthController::class,'index'])->name('admin.login');

    Route::post('/login',[AuthController::class,'login'])->name('admin.login.process');

    Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

    // Route admin yang ada di dalam nya
    Route::middleware('admin')->group(function(){

        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

        Route::get('/mnghome',[HomeLandingController::class,'index'])->name('admin.mnghome');
        Route::match(['get', 'post'], '/formhomeheader', [HomeLandingController::class, 'formheader'])->name('admin.formhomeheader');
        Route::post('/actionhomeheader', [HomeLandingController::class, 'actionheader'])->name('admin.actionhomeheader');
        Route::match(['get', 'post'], '/formhomecontent', [HomeLandingController::class, 'formcontent'])->name('admin.formhomecontent');

        Route::get('/mngevent',[AcvEventCOntroller::class,'index'])->name('admin.mngevent');
        Route::match(['get', 'post'], '/formevent', [AcvEventCOntroller::class, 'form'])->name('admin.formevent');

        Route::get('/admin.mngcsr',[AcvCSRController::class,'index'])->name('admin.mngcsr');
        Route::match(['get', 'post'], '/formcsr', [AcvCSRController::class, 'form'])->name('admin.formcsr');

        Route::get('/generalsetting',[GeneralSettingController::class,'index'])->name('admin.generalsetting');

        Route::get('/users',[UsersController::class,'index'])->name('admin.users');

    });

});
