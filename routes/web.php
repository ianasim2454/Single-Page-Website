<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;

Route::get('/',[BladeController::class,'page']);


