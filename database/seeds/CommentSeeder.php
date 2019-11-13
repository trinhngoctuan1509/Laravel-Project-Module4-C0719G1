<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'userId' => 1,
            'postId' => 2,
            'commentContent' => 'Nha Re Gia Phai Chang',
        ];

        $data2 = [
            'userId' => 2,
            'postId' => 2,
            'commentContent' => 'Nha Re Gia Phai Chang',
        ];

        $data3 = [
            'userId' => 2,
            'postId' => 2,
            'commentContent' => 'Nha Re Gia Phai Chang',
        ];

        $data4 = [
            'userId' => 2,
            'postId' => 2,
            'commentContent' => 'Nha Re Gia Phai Chang, Dep',
        ];

        DB::table('comments')->insert($data1);
        DB::table('comments')->insert($data2);
        DB::table('comments')->insert($data3);
        DB::table('comments')->insert($data4);
    }
}
