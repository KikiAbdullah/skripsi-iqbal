<?php

use App\Models\Rule;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //K001
            ['kode_kerusakan'  => 'K001', 'kode_gejala'  => 'G001'],
            ['kode_kerusakan'  => 'K001', 'kode_gejala'  => 'G002'],
            ['kode_kerusakan'  => 'K001', 'kode_gejala'  => 'G003'],
            ['kode_kerusakan'  => 'K001', 'kode_gejala'  => 'G004'],
            ['kode_kerusakan'  => 'K001', 'kode_gejala'  => 'G005'],
            ['kode_kerusakan'  => 'K001', 'kode_gejala'  => 'G006'],

            //K002
            ['kode_kerusakan'  => 'K002', 'kode_gejala'  => 'G001'],
            ['kode_kerusakan'  => 'K002', 'kode_gejala'  => 'G002'],
            ['kode_kerusakan'  => 'K002', 'kode_gejala'  => 'G007'],
            ['kode_kerusakan'  => 'K002', 'kode_gejala'  => 'G008'],
            ['kode_kerusakan'  => 'K002', 'kode_gejala'  => 'G009'],

            //K003
            ['kode_kerusakan'  => 'K003', 'kode_gejala'  => 'G010'],
            ['kode_kerusakan'  => 'K003', 'kode_gejala'  => 'G011'],
            ['kode_kerusakan'  => 'K003', 'kode_gejala'  => 'G012'],
            ['kode_kerusakan'  => 'K003', 'kode_gejala'  => 'G016'],

            //K004
            ['kode_kerusakan'  => 'K004', 'kode_gejala'  => 'G011'],
            ['kode_kerusakan'  => 'K004', 'kode_gejala'  => 'G013'],
            ['kode_kerusakan'  => 'K004', 'kode_gejala'  => 'G014'],
            ['kode_kerusakan'  => 'K004', 'kode_gejala'  => 'G015'],

            //K005
            ['kode_kerusakan'  => 'K005', 'kode_gejala'  => 'G001'],
            ['kode_kerusakan'  => 'K005', 'kode_gejala'  => 'G016'],
            ['kode_kerusakan'  => 'K005', 'kode_gejala'  => 'G017'],
            ['kode_kerusakan'  => 'K005', 'kode_gejala'  => 'G018'],

            //K006
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G001'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G002'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G003'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G004'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G005'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G006'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G019'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G020'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G021'],
            ['kode_kerusakan'  => 'K006', 'kode_gejala'  => 'G022'],
        ];

        Rule::insert($data);
    }
}
