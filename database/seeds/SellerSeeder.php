<?php

use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
        'sellerCode' => 'SL00001',
        'sellerName' => 'Cá Nhân'
        ];

        $data2 = [
            'sellerCode' => 'SL00002',
            'sellerName' => 'Công Ty'
        ];

        DB::table('sellers')->insert($data1);
        DB::table('sellers')->insert($data2);
    }
}
