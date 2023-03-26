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
                'text'  => 'Kerusakan Pada Piston'
            ],
            [
                'kode'  => 'K002',
                'text'  => 'Kerusakan Pada Valve (Katup)'
            ],
            [
                'kode'  => 'K003',
                'text'  => 'Kerusakan Pada Speedometer Digital'
            ],
            [
                'kode'  => 'K004',
                'text'  => 'Kerusakan Sistem ABS'
            ],
            [
                'kode'  => 'K005',
                'text'  => 'Kerusakan Pada Elektrik Starter'
            ],
            [
                'kode'  => 'K006',
                'text'  => 'Kerusakan Pada CVT'
            ],
            [
                'kode'  => 'K007',
                'text'  => 'Kerusakan Pada Injeksi'
            ],
        ];

        Kerusakan::insert($data);
    }
}
