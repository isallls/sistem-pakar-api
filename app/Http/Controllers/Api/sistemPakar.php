<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\pakarResource;
use App\Models\indication;
use Illuminate\Http\Request;

class sistemPakar extends Controller
{
    //
    public function index()
    {
        $data = indication::all();
        foreach ($data as $d){
            $gejala[] = [
                'indication_id' => $d->indication_id,
                'indication' => $d->indication
            ];
        }
        $diseas = [
            'gejala' => $gejala
        ];      
        return new pakarResource(true, 'Indication', $diseas);
        // return new pakarResource(true, 'Indication', false);
    }
}
