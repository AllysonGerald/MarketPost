<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Site'], function () {
    Route::get('/', [App\Http\Controllers\Site\HomeController::class, '__invoke']);

    Route::prefix('produts')->group(function () {
        Route::get('/', [App\Http\Controllers\Site\CategoryController::class, 'index']);
        Route::get('/{slug}', [App\Http\Controllers\Site\CategoryController::class, 'show']);
    });

    Route::get('blog', [App\Http\Controllers\Site\BlogController::class, '__invoke']);

    Route::view('about', 'site.about.about');

    Route::get('contact', [App\Http\Controllers\Site\ContactController::class, 'index']);
    Route::post('contact', [App\Http\Controllers\Site\ContactController::class, 'form']);

});
