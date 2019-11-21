<?php

use Illuminate\Database\Seeder;

class StatusOfUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'statusOfUserCode' => 'SOUC00001',
            'statusOfUserName' => 'Đang Hoạt Động'
        ];
        $data2 = [
            'statusOfUserCode' => 'SOUC00002',
            'statusOfUserName' => 'Đang Bị Khóa'
        ];
        $data3 = [
            'statusOfUserCode' => 'SOUC00003',
            'statusOfUserName' => 'Đang Chờ Confirm'
        ];




        DB::table('status_of_users')->insert($data1);
        DB::table('status_of_users')->insert($data2);
        DB::table('status_of_users')->insert($data3);
    }
}
