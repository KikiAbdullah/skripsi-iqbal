<?php

use App\Models\Gejala;
use App\Models\Kerusakan;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode' => 'G001',
                'text' => 'Motor sulit dihidupkan'
            ],
            [
                'kode' => 'G002',
                'text' => 'Tenaga yang dihasilkan lemah'
            ],
            [
                'kode' => 'G003',
                'text' => 'Oli cepat Habis'
            ],
            [
                'kode' => 'G004',
                'text' => 'Muncul asap putih dari knalpot'
            ],
            [
                'kode' => 'G005',
                'text' => 'Mesin cepat panas'
            ],
            [
                'kode' => 'G006',
                'text' => 'Suara mesin kasar'
            ],
            [
                'kode' => 'G007',
                'text' => 'Gas tersendat-sendat'
            ],
            [
                'kode' => 'G008',
                'text' => 'Busi mati'
            ],
            [
                'kode' => 'G009',
                'text' => 'Percikan busi berwarna merah kecil'
            ],
            [
                'kode' => 'G010',
                'text' => 'Lampu speedometer mati'
            ],
            [
                'kode' => 'G011',
                'text' => 'Sensor pada speedometer mati'
            ],
            [
                'kode' => 'G012',
                'text' => 'Jam digital speedometer mati'
            ],
            [
                'kode' => 'G013',
                'text' => 'Sensor lampu ABS menyala'
            ],
            [
                'kode' => 'G014',
                'text' => 'Ketika mengerem sensor ABS tidak berfungsi'
            ],
            [
                'kode' => 'G015',
                'text' => 'Saat dihidupkan dengan elektrik starter tidak ada bunyi dari sepeda motor'
            ],
            [
                'kode' => 'G016',
                'text' => 'Speedometer menyala tetapi Ketika di starter dengan elektrik starter motor tidak menyala'
            ],
            [
                'kode' => 'G017',
                'text' => 'Suara kasar pada dinamo starter'
            ],
            [
                'kode' => 'G018',
                'text' => 'Dinamo starter panas'
            ],
            [
                'kode' => 'G019',
                'text' => 'Bunyi kasar pada bagian CVT'
            ],
            [
                'kode' => 'G020',
                'text' => 'Akselerasi melambat'
            ],
            [
                'kode' => 'G021',
                'text' => 'Tenaga motor hilang & timbul'
            ],
            [
                'kode' => 'G022',
                'text' => 'CVT bergetar dengan kuat'
            ],
        ];

        Gejala::insert($data);
    }
}
