<?php

use Illuminate\Database\Seeder;

class PostOfTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'postOfTypeCode' => 'POTC-00001',
            'postOfTypeName' => 'Cần Bán'
        ];
        $data2 = [
            'postOfTypeCode' => 'POTC-00002',
            'postOfTypeName' => 'Cần Mua'
        ];
        $data3 = [
            'postOfTypeCode' => 'POTC-00003',
            'postOfTypeName' => 'Cần Thuê'
        ];
        $data4 = [
            'postOfTypeCode' => 'POTC-00004',
            'postOfTypeName' => 'Cho Thuê'
        ];

        DB::table('post_of_types')->insert($data1);
        DB::table('post_of_types')->insert($data2);
        DB::table('post_of_types')->insert($data3);
        DB::table('post_of_types')->insert($data4);
    }
}
