<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');})->name('home');

Route::resource('/curso', CursoController::class);
Route::resource('/disciplina', DisciplinaController::class);

Route::get('erro', function () {return view('erro');});
Route::get('mensagem', function () {return view('mensagem');});