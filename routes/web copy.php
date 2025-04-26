<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('schedule.index');
});

Route::resource('schedules', \App\Http\Controllers\ScheduleController::class);
