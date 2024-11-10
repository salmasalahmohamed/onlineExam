<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/question', [\App\Http\Controllers\QuestionsController::class,'index']
);
Route::get('/exam',[\App\Http\Controllers\QuestionsController::class,'question']);
Route::get('/end', function () {
    return view('end');
})->name('end');
Route::get('/start', function () {
    return view('start');
});
Route::post('add',[\App\Http\Controllers\QuestionsController::class,'store']);
Route::post('update/{id}',[\App\Http\Controllers\QuestionsController::class,'update']);
Route::any('submit',[\App\Http\Controllers\QuestionsController::class,'submitans']);
