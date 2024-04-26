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
        foreach ($data as $d) {
            $gejala[] = [
                'indication_id' => $d->indication_id,
                'indication' => $d->indication,
            ];
        }
        $diseas = [
            'gejala' => $gejala,
        ];
        return new pakarResource(true, 'Indication', $diseas);
    }
    public function show($id)
    {
        $disease = diseas::find($id);
        $s = [
            'disease' => $disease->dieas,
        ];
        return new pakarResource(true, 'penyakit', $s);
    }

    public function diseas()
    {
        $diseas = diseas::all();
        $s = $diseas;
        foreach ($s as $d) {
            $a[] = [
                'disease_id' => $d->diseas_id,
                'disease' => $d->diseas,
            ];
        }
        $b[] = [
            'penyakit' => $a,
        ];
        return new pakarResource(true, 'data penyakit', $a);
    }

    public function test(Request $request)
    {
        $jsonData = $request->input();
        // $dac = [];
        $data = [
            'gejala' => [],
        ];
        // $ginjalAkut = array(1, 2, 3, 4, 5, 6);
        // $ginjalKronis = array(7, 8, 9, 10, 11, 12);
        // $batuGinjal = array(13, 14, 15, 16, 17);
        // $infeksiGinjal = array(18, 19);
        // $kankerGinjal = array(20, 21, 22);
        // $gagalGinjal = array(23, 24, 25, 26, 27);
        // $nilai = 0;
        if (isset($jsonData['data_diseases_id']) || !empty($jsonData)) {
            $post = $jsonData['data_diseases_id'];
            for ($i = 0; $i < count($post); $i++) {
                // $none = ($post[$i] > count(indication::all()) || $post[$i]==0) ?($post[$i]) : false;
                if ($post[$i] > count(indication::all()) || $post[$i] == 0) {
                    unset($post[$i]);
                }
            }
            if (empty($post)) {
                $indication = [];
            }
            foreach ($post as $d) {
                $indication[] = [
                    'indication_id' => $d,
                    'indication' => indication::find($d)->indication,
                ];
            }
        }
        function check($rule = [], $data)
        {
            $nilai = 0;
            if ($rule == null) {
                $rule = [0];
            }
            foreach ($data as $p) {
                in_array($p, $rule) ? $nilai++ : ($nilai += 0);
            }
            $result = number_format(($nilai / count($rule)) * 100, 1);
            return $result;
        }
        $diseas = diseas::all();
        foreach ($diseas as $d) {
            $resultD = $d->rules->pluck('indication_id')->toArray();
            $x[] = [
                'diseas' => $d->diseas,
                'result' => check($resultD, $post),
            ];
        }
        $data['result'] = $x;
        $data['gejala'] = $indication;
        // return new pakarResource(true, 'info penyakit', $x);
        return new pakarResource(true, 'info penyakit', $data);
    }
}
