<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicRouteController;
use App\Http\Controllers\Administrator\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::prefix('administrator')->group(function(){

    Route::get('/login',[AuthController::class,'index'])->name('admin.login');

    Route::post('/login',[AuthController::class,'login'])->name('admin.login.process');

    Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');

});

/*
|--------------------------------------------------------------------------
| Dynamic Route Loader
|--------------------------------------------------------------------------
*/

$modules = DynamicRouteController::register();

if ($modules) {

    foreach ($modules as $module) {

        Route::prefix($module->msm_prefix ?? '')
        ->middleware(array_filter([$module->msm_middleware]))
        ->group(function () use ($module) {

            foreach ($module->routes as $route) {

                $controller = "App\\Http\\Controllers\\".$route->msr_controller;

                // route utama
                Route::match(['get','post'], $route->msr_uri, [$controller,'index'])
                    ->name($route->msr_name);

                // route tambahan
                Route::match(['get','post'], $route->msr_uri.'/page', [$controller,'page']);
                Route::match(['get','post'], $route->msr_uri.'/insert', [$controller,'insert']);
                Route::match(['get','post'], $route->msr_uri.'/update', [$controller,'update']);
                Route::match(['get','post'], $route->msr_uri.'/delete', [$controller,'delete']);
                Route::match(['get','post'], $route->msr_uri.'/list-data', [$controller,'listData']);
                Route::match(['get','post'], $route->msr_uri.'/show-data', [$controller,'showData']);

            }

        });

    }

}