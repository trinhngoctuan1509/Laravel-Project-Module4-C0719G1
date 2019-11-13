<?php

use Illuminate\Database\Seeder;

class HelpMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'email' => 'ngoctuan.qhvn@gmai.com',
            'phoneNumber' => '0984529224',
            'fullName' => 'Trịnh Ngọc Tuấn',
            'reason' => 'Không đăng ký được tài khoản',
            'sendOfDate' => '11/12/2019'
        ];

        $data2 = [
            'email' => 'huynhtandai.qhvn@gmai.com',
            'phoneNumber' => '0984529224',
            'fullName' => 'Huynh Tan Dai',
            'reason' => 'Không đăng ký được tài khoản',
            'sendOfDate' => '15/12/2019'
        ];

        $data3 = [
            'email' => 'lamthevu.qhvn@gmai.com',
            'phoneNumber' => '0984529224',
            'fullName' => 'Lâm Thế Vũ',
            'reason' => 'Không đăng ký được tài khoản',
            'sendOfDate' => '18/12/2019'
        ];

        DB::table('help_messages')->insert($data1);
        DB::table('help_messages')->insert($data2);
        DB::table('help_messages')->insert($data3);
    }
}
