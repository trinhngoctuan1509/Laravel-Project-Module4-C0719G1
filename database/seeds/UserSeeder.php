<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
            'tokenVerifymail'=>Str::random(),
            'VerifymailId'=>'2',
            'statusOfUserId' => 2,
            'levelOfUserId' => 2,
            'imageAvatarOfUser' => 'tuan.png',
            'reasonLocked' => 'Comment chửi thề, thiếu văn hóa'
        ];

        $data2 = [
            'fullName' => 'Huynh Tan Dai',
            'email' => 'huynhtandai.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
            'tokenVerifymail'=>Str::random(),
            'VerifymailId'=>'2',
            'statusOfUserId' => 1,
            'levelOfUserId' => 2,
            'imageAvatarOfUser' => 'dai.png',
            'reasonLocked' => null
        ];

        $data3 = [
            'fullName' => 'Lam The Vu',
            'email' => 'lamthevu.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
            'tokenVerifymail'=>Str::random(),
            'VerifymailId'=>'2',
            'statusOfUserId' => 1,
            'levelOfUserId' => 1,
            'imageAvatarOfUser' => 'vu.png',
            'reasonLocked' => null
        ];

        $data4 = [
            'fullName' => 'Le Dinh Thoa',
            'email' => 'ledinhthoa.qhvn@gmail.com',
            'address' => 'Hai Chau - Da Nang',
            'phoneNumber' => '0904529224',
            'password' => bcrypt('123'),
            'tokenVerifymail'=>Str::random(),
            'VerifymailId'=>'2',
            'statusOfUserId' => 2,
            'levelOfUserId' => 2,
            'imageAvatarOfUser' => 'thoa.png',
            'reasonLocked' => null
        ];



        DB::table('users')->insert($data1);
        DB::table('users')->insert($data2);
        DB::table('users')->insert($data3);
        DB::table('users')->insert($data4);

    }
}
