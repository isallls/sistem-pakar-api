<?php

namespace App\Http\Controllers;

use App\Models\diseas;
use App\Models\indication;
use App\Models\rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Testing\Constraints\CountInDatabase;

use function Laravel\Prompts\alert;

class testControll extends Controller
{
    //
    public function index(Request $request)
    {
        return view('test', [
            'a' => rules::find(1),
            'as' => diseas::find(1),
        ]);
    }
    public function create()
    {
        // return indication::create([
        //     'indication' => 'perut keconcongan',
        // ]);
    }
}
