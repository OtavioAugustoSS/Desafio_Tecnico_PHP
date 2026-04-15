<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartorioController;

Route::get('/', function () {
    return redirect('/cartorios');
});

Route::resource('cartorios', CartorioController::class);
