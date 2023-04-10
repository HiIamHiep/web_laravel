<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'courses', 'as' => 'course.'], function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::get('/create', [CourseController::class, 'create'])->name('create');
    Route::post('/store', [CourseController::class, 'store'])->name('store');

});

