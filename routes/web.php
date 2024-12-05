<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', [TestController::class, 'test']);
Route::get('/names', [TestController::class, 'names']);
Route::get('/names/create/{family}/{name}',  [TestController::class, 'namesCreate']);
Route::get('/families/create/{name}',  [TestController::class, 'familyCreate']);

Route::post('/names/delete', [TestController::class, 'deleteName']);

Route::get('/names/manage/surname', [TestController::class, 'manageSurname']);
Route::post('/names/manage/surname/delete', [TestController::class, 'deleteSurname']);





Route::post('/names/manage/surname/new', [TestController::class, 'newSurname']);
Route::post('/names/manage/name/new', [TestController::class, 'newName']);