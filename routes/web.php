<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
Route::get('/', [DetailsController::class, 'index']);
