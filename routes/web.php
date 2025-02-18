<?php

use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/greeting', [Welcome::class, 'greeting']);