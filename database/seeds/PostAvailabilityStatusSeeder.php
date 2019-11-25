<?php

use Illuminate\Database\Seeder;

class PostAvailabilityStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'availability_status' => 'Đang rao'
        ];
        $data2 = [
            'availability_status' => 'Đang duyệt'
        ];
        $data3 = [
            'availability_status' => 'Đã gỡ bỏ'
        ];

        DB::table('post_availability_status')->insert($data1);
        DB::table('post_availability_status')->insert($data2);
        DB::table('post_availability_status')->insert($data3);
    }
}
