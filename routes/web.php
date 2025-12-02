<?php

use Illuminate\Support\Facades\Route;

Route::resource('paises', PaisController::class);
Route::resource('disciplinas', DisciplinaController::class);
Route::resource('deportistas', DeportistaController::class);

Route::get('/', function () {
    return redirect('deportistas');
});

