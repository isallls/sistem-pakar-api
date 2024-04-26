<?php

namespace App\Http\Controllers;

use App\Models\diseas;
use App\Models\indication;
use App\Models\rules;
use Illuminate\Http\Request;
use Illuminate\Testing\Constraints\CountInDatabase;

use function Laravel\Prompts\alert;

class testControll extends Controller
{
    //
    public function index()
    {
        return view('test', [
            'test' => indication::all(),
            'cont' => 'controllers',
            'a' => diseas::find(1),
            'test' => diseas::all(),
            'tet' => rules::all(),
            'r' => diseas::find(7),
            'q' => diseas::find(1),
            'asd' => gettype(diseas::find(7)->rules->pluck('indicaion_id')),
            'awa' => rules::find(28)
        ]);
    }
}
