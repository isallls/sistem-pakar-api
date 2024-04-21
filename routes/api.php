<?php

use App\Http\Controllers\Api\sistemPakar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('/pakar', sistemPakar::class);
Route::get('/penyakit/{id}', [sistemPakar::class, 'show']);
Route::get('/penyakit', [sistemPakar::class, 'diseas']);
