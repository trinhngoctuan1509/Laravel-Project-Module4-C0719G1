<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'regionCode' => 'KV00001',
            'regionName' => 'Hà Nội'
        ];

        $data2 = [
            'regionCode' => 'KV00002',
            'regionName' => 'Huế'
        ];

        $data3 = [
            'regionCode' => 'KV00003',
            'regionName' => 'Đà Nẵng'
        ];
        $data4 = [
            'regionCode' => 'KV00004',
            'regionName' => 'TP.HCM'
        ];
        $data5 = [
            'regionCode' => 'KV00005',
            'regionName' => 'Cà Mau'
        ];

        DB::table('regions')->insert($data1);
        DB::table('regions')->insert($data2);
        DB::table('regions')->insert($data3);
        DB::table('regions')->insert($data4);
        DB::table('regions')->insert($data5);
    }
}
