<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'fullName' => 'Trinh Ngoc Tuan',
            'email' => 'ngoctuan.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
            'statusOfUserId' => 1,
            'levelOfUserId' => 2,
            'imageAvatarOfUser' => 'tuan.png'
        ];

        $data2 = [
            'fullName' => 'Huynh Tan Dai',
            'email' => 'huynhtandai.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
            'statusOfUserId' => 1,
            'levelOfUserId' => 2,
            'imageAvatarOfUser' => 'dai.png'
        ];

        $data3 = [
            'fullName' => 'Lam The Vu',
            'email' => 'lamthevu.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
            'levelOfUserId' => 2,
            'statusOfUserId' => 2,
            'imageAvatarOfUser' => 'vu.png'
        ];

        $data4 = [
            'fullName' => 'Le Dinh Thoa',
            'email' => 'ledinhthoa.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
            'levelOfUserId' => 2,
            'statusOfUserId' => 2,
            'imageAvatarOfUser' => 'thoa.png'
        ];



        DB::table('users')->insert($data1);
        DB::table('users')->insert($data2);
        DB::table('users')->insert($data3);
        DB::table('users')->insert($data4);

    }
}
