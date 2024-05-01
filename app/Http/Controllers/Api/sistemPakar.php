<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\pakarResource;
use App\Models\diseas;
use App\Models\indication;
use Illuminate\Http\Request;
use League\MimeTypeDetection\EmptyExtensionToMimeTypeMap;

class sistemPakar extends Controller
{
    //
    public function index()
    {
        $data = indication::all();
        foreach ($data as $i) {
            $gejala[] = [
                'indication_id' => $i->indication_id,
                'indication' => $i->indication,
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
            'disease' => $disease,
            'rules' => $disease->rules
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
        $data = [
            'gejala' => [],
        ];

        if (isset($jsonData['data_diseases_id']) || !empty($jsonData)) {
            $post = $jsonData['data_diseases_id'];
            $post = collect($post)->unique();
            for ($i = 0; $i < count($post); $i++) {
                $none = $post[$i] > count(indication::all()) || $post[$i] == 0 ? $post[$i] : false;
                unset($none);
            }
            foreach ($post as $d) {
                $indication[] = [
                    'indication_id' => $d,
                    // 'indication' => indication::find($d)->indication,
                    'indication' =>  indication::where('indication_id',$d)->first()->indication,
                ];
            }
            if (empty($post)) {
                $indication = [];
            }
        }
        function check($rule = [], $data)
        {
            $nilai = 0;
            $rule == null ? ($rule = [0]) : false;
            foreach ($data as $p) {
                in_array($p, $rule) ? $nilai++ : $nilai += 0;
            }
            $result = number_format(($nilai / count($rule)) * 100, 1);
            return $result;
        }
        $diseas = diseas::all();
        foreach ($diseas as $d) {
            $resultD = $d->rules->pluck('indication_id')->toArray();
            $results[] = [
                'diseas' => $d->diseas,
                'result' => check($resultD, $post),
                'diseas_id' => $d->id
            ];
        }
        $data['result'] = $results;
        $data['gejala'] = isset($indication) ? $indication : [];

        return new pakarResource(true, 'info penyakit',$data);
        // return new pakarResource(true, 'info penyakit', $data);
    }
}
