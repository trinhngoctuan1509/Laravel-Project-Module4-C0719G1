<?php

use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
        'directionCode' => 'HV-00001',
        'directionName' => 'Đông'
        ];

        $data2 = [
            'directionCode' => 'HV-00002',
            'directionName' => 'Tây'
        ];

        $data3 = [
            'directionCode' => 'HV-00003',
            'directionName' => 'Nam'
        ];

        $data4 = [
            'directionCode' => 'HV-00004',
            'directionName' => 'Bắc'
        ];

        $data5 = [
            'directionCode' => 'HV-00005',
            'directionName' => 'Đông-Nam'
        ];

        $data6 = [
            'directionCode' => 'HV-00006',
            'directionName' => 'Tây-Nam'
        ];

        $data7 = [
            'directionCode' => 'HV-00007',
            'directionName' => 'Đông-Bắc'
        ];

        $data8 = [
            'directionCode' => 'HV-00008',
            'directionName' => 'Tây-Bắc'
        ];

        DB::table('directions')->insert($data1);
        DB::table('directions')->insert($data2);
        DB::table('directions')->insert($data3);
        DB::table('directions')->insert($data4);
        DB::table('directions')->insert($data5);
        DB::table('directions')->insert($data6);
        DB::table('directions')->insert($data7);
        DB::table('directions')->insert($data8);
    }
}
