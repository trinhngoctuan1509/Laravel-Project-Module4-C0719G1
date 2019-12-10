<?php

use Illuminate\Database\Seeder;

class Verifymail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [

            'VerifymailName' => 'Chưa Confirm email'
        ];
        $data2 = [

                'VerifymailName' => 'Đã Confirm email'
        ];
        DB::table('verifymails')->insert($data1);
        DB::table('verifymails')->insert($data2);
    }
}
