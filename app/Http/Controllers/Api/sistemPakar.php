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

    public function test(Request $request)
    {
        $jsonData = $request->input();
        $data = [];

        // Periksa apakah $jsonData adalah array dan memiliki kunci 'data_diseases_id'
        if (is_array($jsonData) && isset($jsonData["data_diseases_id"])) {
            $data_diseases_id = $jsonData["data_diseases_id"];

            // Periksa apakah $data_diseases_id adalah array
            if (is_array($data_diseases_id) && !empty($data_diseases_id)) {
                foreach ($data_diseases_id as $d) {
                    // Misalkan $d adalah teks gejala, simpan ke dalam array $data
                    $data[] = ['gejala' => $d];
                }
            } else {
                // Handle jika $data_diseases_id kosong atau bukan array
                $data['data_diseases_id'] = null; // Atau lakukan penanganan kesalahan lainnya
            }
        } else {
            // Handle jika $jsonData kosong atau tidak memiliki kunci 'data_diseases_id'
            $data['data_diseases_id'] = null; // Atau lakukan penanganan kesalahan lainnya
        }
        // $jsonData = $jsonData['data_diseases_id'];
        return new pakarResource(true, 'info penyakut', dd($data));
    }
}
