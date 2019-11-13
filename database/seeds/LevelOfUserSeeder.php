<?php

use Illuminate\Database\Seeder;

class LevelOfUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'userLevelOfCode' => 'UN00001',
            'userLevelOfName' => 'Admin'
        ];

        $data2 = [
            'userLevelOfCode' => 'UN00002',
            'userLevelOfName' => 'Quản Trị Viên'
        ];

        $data3 = [
            'userLevelOfCode' => 'UN00003',
            'userLevelOfName' => 'Người Dùng'
        ];

        DB::table('level_of_users')->insert($data1);
        DB::table('level_of_users')->insert($data2);
        DB::table('level_of_users')->insert($data3);
    }
}
