<?php

use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/tasks')->group(function () {
    Route::get('/', TaskIndex::class);
    Route::get('/create', TaskCreate::class);
});
