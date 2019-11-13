<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'categoryName' => 'Chung Cư',
            'categoryCode' => 'DM00001'
        ];

        $data2 = [
            'categoryName' => 'Đất Nền',
            'categoryCode' => 'DM00002'
        ];

        $data3 = [
            'categoryName' => 'Mặt Bằng',
            'categoryCode' => 'DM00003'
        ];

        $data4 = [
            'categoryName' => 'Nhà',
            'categoryCode' => 'DM00004'
        ];

        $data5 = [
            'categoryName' => 'Phòng Trọ',
            'categoryCode' => 'DM00005'
        ];

        $data6 = [
            'categoryName' => 'Tòa Nhà',
            'categoryCode' => 'DM00006'
        ];

        DB::table('categories')->insert($data1);
        DB::table('categories')->insert($data2);
        DB::table('categories')->insert($data3);
        DB::table('categories')->insert($data4);
        DB::table('categories')->insert($data5);
        DB::table('categories')->insert($data6);
    }
}
