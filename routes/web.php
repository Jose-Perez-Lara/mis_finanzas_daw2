<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('incomes', IncomeController::class);
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::post('/incomes/create', [IncomeController::class, 'store']);


Route::get('/outcomes', [OutcomeController::class, 'index'])->name('outcomes.index');
Route::get('/outcomes/create', [OutcomeController::class, 'create'])->name('outcomes.create');
Route::post('/outcomes/create', [OutcomeController::class, 'store']);
