<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('teachers.index');
});

Route::resource('teachers', \App\Http\Controllers\TeacherController::class);
