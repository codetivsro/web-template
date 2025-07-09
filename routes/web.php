<?php

declare(strict_types=1);

use App\Models\Page;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/cache/clear', function () {
    cache()->flush();

    return redirect()->back();
})->name('cache.clear');

Route::get('/{page:slug}', function (Page $page) {
    return view('page.show', ['page' => $page]);
});
