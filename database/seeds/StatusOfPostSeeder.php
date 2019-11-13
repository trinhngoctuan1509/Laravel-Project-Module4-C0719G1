<?php

use Illuminate\Database\Seeder;

class StatusOfPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'statusOfPostCode' => 'SOPC00001',
            'statusOfPostName' => 'Mới'
        ];

        $data2 = [
            'statusOfPostCode' => 'SOPC00002',
            'statusOfPostName' => 'Đã Qua Sử Dụng'
        ];

        DB::table('status_of_posts')->insert($data1);
        DB::table('status_of_posts')->insert($data2);
    }
}
