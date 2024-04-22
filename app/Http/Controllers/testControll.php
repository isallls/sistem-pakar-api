<?php

namespace App\Http\Controllers;

use App\Models\diseas;
use App\Models\indication;
use Illuminate\Http\Request;
use Illuminate\Testing\Constraints\CountInDatabase;

class testControll extends Controller
{
    //
    public function index()
    {
        return view('test', [
            'test' => indication::all(),
            'cont' => 'controllers',
            'a' => count(indication::all()),
        ]);
    }
}
