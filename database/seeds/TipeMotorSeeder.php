<?php

use App\Models\TipeMotor;
use Illuminate\Database\Seeder;

class TipeMotorSeeder extends Seeder
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
                'name' => 'YAMAHA N-MAX'
            ],
            [
                'name' => 'YAMAHA XMAX'
            ],
        ];

        TipeMotor::insert($data);
    }
}
