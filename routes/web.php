<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreesController;

//Route::get('/', function () {return view('welcome');});

Route::get('/', [TreesController::class, 'index'])->name('trees.index');
Route::get('/trees/{tree}', [TreesController::class, 'show'])->name('trees.show');