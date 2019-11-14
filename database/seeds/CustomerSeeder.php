<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'fullName'=>'Trinh Ngoc Tuan',
            'email'=>'ngoctuan.qhvn@gmail.com',
            'phone'=>'0984529224',
        ];

        $data2 = [
            'fullName'=>'Huynh Tan Dai',
            'email'=>'huynhtandai.qhvn@gmail.com',
            'phone'=>'0984529224',
        ];

        $data3 = [
            'fullName'=>'Lam The Vu',
            'email'=>'lamthevu.qhvn@gmail.com',
            'phone'=>'0984529224',
        ];

        DB::table('customers')->insert($data1);
        DB::table('customers')->insert($data2);
        DB::table('customers')->insert($data3);
    }
}
