<?php

use App\Http\Controllers\portalquejasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GrievanceController;


use App\Http\Middleware\BasicAuthMiddleware;

Route::middleware([BasicAuthMiddleware::class])->group(function () {
    Route::get('/', [portalquejasController::class, 'index'])->name('portalquejas');
    Route::post('/submit-grievance', [portalquejasController::class, 'send']);
    Route::get('/grievance-sent', fn() => view('enviado'))->name('enviado');
});
