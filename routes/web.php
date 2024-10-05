<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Site'], function () {
    Route::get('/', [App\Http\Controllers\Site\HomeController::class, '__invoke'])->name('site.home');

    Route::prefix('produts')->group(function () {
        Route::get('/', [App\Http\Controllers\Site\CategoryController::class, 'index'])->name('site.products');
        Route::get('/{slug}', [App\Http\Controllers\Site\CategoryController::class, 'show'])->name('site.products.category');
    });

    Route::view('about', 'site.about.about')->name('site.about');

    Route::get('contact', [App\Http\Controllers\Site\ContactController::class, 'index'])->name('site.contact');
    Route::post('contact', [App\Http\Controllers\Site\ContactController::class, 'form'])->name('site.contact.form');

});

Route::group(['namespace' => 'App\Http\Controllers\Blog'], function () {
    Route::get('blog', [App\Http\Controllers\Blog\BlogController::class, '__invoke'])->name('blog.home');
    // Route::get('blog/{slug}', [App\Http\Controllers\Blog\PostController::class, 'show'])->name('blog.post');
});
