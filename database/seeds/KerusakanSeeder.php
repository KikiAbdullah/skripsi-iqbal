<?php

use App\Models\Kerusakan;
use Illuminate\Database\Seeder;

class KerusakanSeeder extends Seeder
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
                'kode'  => 'K001',
                'img'   => 'img-kerusakan/k001.jpg',
                'text'  => 'Kerusakan Pada Piston',
                'deskripsi' => '',
            ],
            [
                'kode'  => 'K002',
                'img'   => 'img-kerusakan/k002.jpg',
                'text'  => 'Kerusakan Pada Valve (Katup)',
                'deskripsi' => '',
            ],
            [
                'kode'  => 'K003',
                'img'   => 'img-kerusakan/k003.jpg',
                'text'  => 'Kerusakan Pada Speedometer Digital',
                'deskripsi' => '',
            ],
            [
                'kode'  => 'K004',
                'img'   => 'img-kerusakan/k004.jpg',
                'text'  => 'Kerusakan Sistem ABS',
                'deskripsi' => '',
            ],
            [
                'kode'  => 'K005',
                'img'   => 'img-kerusakan/k005.jpg',
                'text'  => 'Kerusakan Pada Elektrik Starter',
                'deskripsi' => '',
            ],
            [
                'kode'  => 'K006',
                'img'   => 'img-kerusakan/k006.jpg',
                'text'  => 'Kerusakan Pada CVT',
                'deskripsi' => '',
            ],
            [
                'kode'  => 'K007',
                'img'   => 'img-kerusakan/k007.jpg',
                'text'  => 'Kerusakan Pada Injeksi',
                'deskripsi' => '',
            ],
        ];

        Kerusakan::insert($data);
    }
}
