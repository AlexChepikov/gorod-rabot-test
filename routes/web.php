<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\PageController;

Route::group(['namespace' => 'Pages', 'as' => 'pages.'], function () {
    Route::get('/', [PageController::class, 'main'])->name('main');
    Route::get('/sql', [PageController::class, 'sql'])->name('sql');
    Route::get('/php', [PageController::class, 'php'])->middleware('log')->name('php');
});
