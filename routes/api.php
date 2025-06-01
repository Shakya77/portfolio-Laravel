<?php

use App\Http\Controllers\School\SignUpDemoController;
use Illuminate\Support\Facades\Route;

Route::post('/school/demo', [SignUpDemoController::class, 'store'])->name('school.demo.store');
