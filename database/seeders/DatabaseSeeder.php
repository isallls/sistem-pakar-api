<?php

namespace Database\Seeders;

use App\Models\diseas;
use App\Models\indication;
use App\Models\relasi;
use App\Models\relation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\map;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        indication::create([
            'indication_id' => 1,
            'indication' => 'Nyeri pinggang hebat(kolik)',
        ]);
        indication::create([
            'indication_id' => 2,
            'indication' => 'Kencing sakit',
        ]);
        indication::create([
            'indication_id' => 3,
            'indication' => 'Demam',
        ]);
        indication::create([
            'indication_id' => 4,
            'indication' => 'Kencing Sedikit',
        ]);
        indication::create([
            'indication_id' => 5,
            'indication' => 'Kencing merah/darah',
        ]);
        indication::create([
            'indication_id' => 6,
            'indication' => 'Sering kencing',
        ]);
        indication::create([
            'indication_id' => 7,
            'indication' => 'Hilang nafsu makan',
        ]);
        indication::create([
            'indication_id' => 8,
            'indication' => 'Lelah dan lemah',
        ]);
        indication::create([
            'indication_id' => 9,
            'indication' => 'Bermasalah dalam tidur',
        ]);
        indication::create([
            'indication_id' => 10,
            'indication' => 'Otot terkedutdan kejang',
        ]);
        indication::create([
            'indication_id' => 11,
            'indication' => 'Bengkak pada area kaki',
        ]);
        indication::create([
            'indication_id' => 12,
            'indication' => 'Timbul rasa gatal',
        ]);
        indication::create([
            'indication_id' => 13,
            'indication' => 'Nyeri pada saat buang air kecil',
        ]);
        indication::create([
            'indication_id' => 14,
            'indication' => 'Urin berwarna pink, merah atau coklat',
        ]);
        indication::create([
            'indication_id' => 15,
            'indication' => 'Mual dan muntah',
        ]);
        indication::create([
            'indication_id' => 16,
            'indication' => 'Sering buang air kecil',
        ]);
        indication::create([
            'indication_id' => 17,
            'indication' => 'Nyeri punggung, pinggul atau pangkal paha',
        ]);
        indication::create([
            'indication_id' => 18,
            'indication' => 'Nyeri pada perut',
        ]);
        indication::create([
            'indication_id' => 19,
            'indication' => 'Nanah atau darah pada urin',
        ]);
        indication::create([
            'indication_id' => 20,
            'indication' => 'Tubuh terasa sangat lelah sekali tanpa sebab apapun',
        ]);
        indication::create([
            'indication_id' => 21,
            'indication' => 'Rasa nyeri pada sisi yang tidak hilang',
        ]);
        indication::create([
            'indication_id' => 22,
            'indication' => 'Adanya darah dalam urin',
        ]);
        indication::create([
            'indication_id' => 23,
            'indication' => 'Tekanan darah tinggi',
        ]);
        indication::create([
            'indication_id' => 24,
            'indication' => 'Darah dalam air kencing',
        ]);
        indication::create([
            'indication_id' => 25,
            'indication' => 'Rasa lemah serta sulit tidur',
        ]);
        indication::create([
            'indication_id' => 26,
            'indication' => 'Sakit kepala',
        ]);
        indication::create([
            'indication_id' => 27,
            'indication' => 'Sesak nafas',
        ]);
        diseas::create([
            'diseas_id' => 1,
            'diseas' => 'Gagal Ginjal Akut',
        ]);
        diseas::create([
            'diseas_id' => 2,
            'diseas' => 'Gagal Ginjal Kronis',
        ]);
        diseas::create([
            'diseas_id' => 3,
            'diseas' => 'Batu Ginjal',
        ]);
        diseas::create([
            'diseas_id' => 4,
            'diseas' => 'Infeksi Ginjal',
        ]);
        diseas::create([
            'diseas_id' => 5,
            'diseas' => 'Kanker Ginjal',
        ]);
        diseas::create([
            'diseas_id' => 6,
            'diseas' => 'Gagal Ginjal',
        ]);
        relation::create([
            'relation_id' => 1,
            'indication_id' => '1',
            'diseas_id' => '1',
        ]);
        relation::create([
            'relation_id' => 2,
            'indication_id' => '2',
            'diseas_id' => '1',
        ]);
        relation::create([
            'relation_id' => 3,
            'indication_id' => '3',
            'diseas_id' => '1',
        ]);
        relation::create([
            'relation_id' => 4,
            'indication_id' => '4',
            'diseas_id' => '1',
        ]);
        relation::create([
            'relation_id' => 5,
            'indication_id' => '5',
            'diseas_id' => '1',
        ]);
        relation::create([
            'relation_id' => 6,
            'indication_id' => '6',
            'diseas_id' => '1',
        ]);
        relation::create([
            'relation_id' => 7,
            'indication_id' => '7',
            'diseas_id' => '2',
        ]);
        relation::create([
            'relation_id' => 8,
            'indication_id' => '8',
            'diseas_id' => '2',
        ]);
        relation::create([
            'relation_id' => 9,
            'indication_id' => '9',
            'diseas_id' => '2',
        ]);
        relation::create([
            'relation_id' => 10,
            'indication_id' => '10',
            'diseas_id' => '2',
        ]);
        relation::create([
            'relation_id' => 11,
            'indication_id' => '11',
            'diseas_id' => '2',
        ]);
        relation::create([
            'relation_id' => 12,
            'indication_id' => '12',
            'diseas_id' => '2',
        ]);
        relation::create([
            'relation_id' => 13,
            'indication_id' => '13',
            'diseas_id' => '3',
        ]);
        relation::create([
            'relation_id' => 14,
            'indication_id' => '14',
            'diseas_id' => '3',
        ]);
        relation::create([
            'relation_id' => 15,
            'indication_id' => '15',
            'diseas_id' => '3',
        ]);
        relation::create([
            'relation_id' => 16,
            'indication_id' => '16',
            'diseas_id' => '3',
        ]);
        relation::create([
            'relation_id' => 17,
            'indication_id' => '17',
            'diseas_id' => '3',
        ]);
        relation::create([
            'relation_id' => 18,
            'indication_id' => '18',
            'diseas_id' => '4',
        ]);
        relation::create([
            'relation_id' => 19,
            'indication_id' => '19',
            'diseas_id' => '4',
        ]);
        relation::create([
            'relation_id' => 20,
            'indication_id' => '20',
            'diseas_id' => '5',
        ]);
        relation::create([
            'relation_id' => 21,
            'indication_id' => '21',
            'diseas_id' => '5',
        ]);
        relation::create([
            'relation_id' => 22,
            'indication_id' => '22',
            'diseas_id' => '5',
        ]);
        relation::create([
            'relation_id' => 23,
            'indication_id' => '23',
            'diseas_id' => '6',
        ]);
        relation::create([
            'relation_id' => 24,
            'indication_id' => '24',
            'diseas_id' => '6',
        ]);
        relation::create([
            'relation_id' => 25,
            'indication_id' => '25',
            'diseas_id' => '6',
        ]);
        relation::create([
            'relation_id' => 26,
            'indication_id' => '26',
            'diseas_id' => '6',
        ]);
        relation::create([
            'relation_id' => 27,
            'indication_id' => '27',
            'diseas_id' => '6',
        ]);
    }
}
