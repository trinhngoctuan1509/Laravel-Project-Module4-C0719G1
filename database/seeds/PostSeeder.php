<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
            'title' => 'Nha Gia Re Da Nang',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => '200',
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => '2000',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'ableComposition' => true
        ];

        $data2 = [
            'userId' => 2,
            'title' => 'Nha Gia Re Da Nang',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => '200',
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => '2000',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'ableComposition' => true
        ];

        $data3 = [
            'userId' => 2,
            'title' => 'Nha Gia Re Da Nang',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => '200',
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => '2000',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'ableComposition' => true
        ];

        DB::table('posts')->insert($data1);
        DB::table('posts')->insert($data2);
        DB::table('posts')->insert($data3);
    }
}
