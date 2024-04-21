<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\pakarResource;
use App\Models\diseas;
use App\Models\indication;
use Illuminate\Http\Request;

class sistemPakar extends Controller
{
    //
    public function index()
    {
        $data = indication::all();
        $penyakit = diseas::all();
        foreach ($data as $d) {
            $gejala[] = [
                'indication_id' => $d->indication_id,
                'indication' => $d->indication
            ];
        }
        $diseas = [
            'gejala' => $gejala,
        ];
        return new pakarResource(true, 'Indication', $diseas);
        // return new pakarResource(true, 'Indication', false);
    }
    public function show($id)
    {

        $disease = diseas::find($id);
        $s = [
            'disease' => $disease->dieas,
        ];
        dd($disease);
        // $s = ['kucing'];
        return new pakarResource(true, 'penyakit', $s);
    }

    public function diseas()
    {
        $diseas = diseas::all();
        $s = $diseas;
        foreach ($s as $d) {
            $a[] = [
                'disease_id' => $d->diseas_id,
                'disease' => $d->diseas
            ];
        }
        $b[] = [
            'penyakit' => $a,
        ];
        return new pakarResource(true, 'data penyakit', $a);
    }
}
