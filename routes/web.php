<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('expense',function(){
    return Inertia::render('Index');
});
Route::resource('expenses', ExpenseController::class);
