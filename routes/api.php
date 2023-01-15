<?php

declare (strict_types = 1);

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/pietrzykowski302931/people', [\App\Http\Controllers\PeopleController::class, 'index']);
Route::post('/pietrzykowski302931/people', [\App\Http\Controllers\PeopleController::class, 'create']);
Route::get('/pietrzykowski302931/{people}', [\App\Http\Controllers\PeopleController::class, 'read']);
Route::put('/pietrzykowski302931/{id}/{name}/{surname}', [\App\Http\Controllers\PeopleController::class, 'update']);
Route::delete('/pietrzykowski302931/people/{people}', [\App\Http\Controllers\PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 
