<?php

use App\Http\Controllers\testControll;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('test');
// });

Route::get('/',[testControll::class,'index']);