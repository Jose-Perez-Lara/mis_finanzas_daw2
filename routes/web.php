<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SpendingController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('incomes', IncomeController::class);
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::post('/incomes/create', [IncomeController::class, 'store']);
Route::get('/incomes/edit/{id}', [IncomeController::class, 'edit'])->name('incomes.edit');
Route::put('/incomes/{id}', [IncomeController::class, 'update'])->name('incomes.update');
Route::delete('/incomes/delete/{id}', [IncomeController::class, 'destroy'])->name('incomes.delete');


Route::get('/spendings', [SpendingController::class, 'index'])->name('spendings.index');
Route::get('/spendings/create', [SpendingController::class, 'create'])->name('spendings.create');
Route::post('/spendings/create', [SpendingController::class, 'store']);
Route::get('/spendings/{id}', [SpendingController::class, 'edit'])->name('spendings.edit');
Route::put('/spendings/{id}', [SpendingController::class, 'update'])->name('spendings.update');
Route::delete('/spendings/delete/{id}', [SpendingController::class, 'destroy'])->name('spendings.delete');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
