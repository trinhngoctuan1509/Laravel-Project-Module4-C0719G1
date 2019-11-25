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
            'title' => 'Chung Cư Trung Tâm Thành Phố 35-55-100m2',
            'categoryId' => 1,
            'regionId' => 3,
            'sellerId' => 1,
            'postOfTypeId' => 4,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 50,
            'directionId' => 3,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 5500000,
            'imageFolderName' => 'imageFolderOfPost1',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 2,
            'ableComposition' => true
        ];

        $data2 = [
            'userId' => 2,
            'title' => 'Chung Cư Giá Rẻ 150m2, full nội thất',
            'categoryId' => 1,
            'regionId' => 3,
            'sellerId' => 1,
            'postOfTypeId' => 4,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 70,
            'directionId' => 3,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 8000000,
            'imageFolderName' => 'imageFolderOfPost2',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data3 = [
            'userId' => 2,
            'title' => 'Chung Cư 2 phòng ngủ, gần cầu rồng',
            'categoryId' => 1,
            'regionId' => 3,
            'sellerId' => 1,
            'postOfTypeId' => 4,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 90,
            'directionId' => 3,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 9500000,
            'imageFolderName' => 'imageFolderOfPost3',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data4 = [
            'userId' => 2,
            'title' => '18 hecta đất rẫy ở Tân Thuận huyện Hàm Thuận Nam',
            'categoryId' => 4,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 3,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 9000000,
            'imageFolderName' => 'imageFolderOfPost4',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data5 = [
            'userId' => 2,
            'title' => 'Căn hộ Ngay Vincom Quận 2, 80m² 2PN, nhận nhà ngay',
            'categoryId' => 5,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 3,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 13000000,
            'imageFolderName' => 'imageFolderOfPost5',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data6 = [
            'userId' => 2,
            'title' => 'Bán nhà mt căn góc đường số 5 chợ Bà Hom 6,5mx18m',
            'categoryId' => 6,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 3,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 23000000,
            'imageFolderName' => 'imageFolderOfPost6',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 2,
            'ableComposition' => true
        ];

        $data7 = [
            'userId' => 2,
            'title' => 'MỞ BÁN NHÀ MẶT TIỀN ĐƯỜNG SỐ 6, KHU ĐÔ THỊ 5A',
            'categoryId' => 1,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 3,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 35000000,
            'imageFolderName' => 'imageFolderOfPost7',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 3,
            'ableComposition' => true
        ];

        $data8 = [
            'userId' => 2,
            'title' => 'Bán gấp nhà Phố Thụy Khuê Siêu Rẻ,35/44x5T, giá chỉ 4,5 tỷ.',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 100000000,
            'imageFolderName' => 'imageFolderOfPost8',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data9 = [
            'userId' => 2,
            'title' => 'BÁN TÒA NHÀ MẶT PHỐ VŨ TÔNG PHAN Siểu Rẻ, 110M2, 26 TỶ',
            'categoryId' => 3,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 300,
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 26000000000,
            'imageFolderName' => 'imageFolderOfPost9',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data10 = [
            'userId' => 2,
            'title' => 'BÁN GẤP ĐẤT ĐƯỜNG ĐẶNG VĂN NGỮ GIÁ 2TY570 XDTD',
            'categoryId' => 4,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 1500000000,
            'imageFolderName' => 'imageFolderOfPost10',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data11 = [
            'userId' => 2,
            'title' => 'Bán Lô Góc Kinh Doanh.Quận Hai Bà Trưng 5.4 tỷ',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 2300000000,
            'imageFolderName' => 'imageFolderOfPost11',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data12 = [
            'userId' => 2,
            'title' => 'MUỐN BÁN CĂN 2PN 77M2 RẺ HƠN CHỦ ĐẦU TƯ 600 TRIỆU',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 2500000000,
            'imageFolderName' => 'imageFolderOfPost12',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data13 = [
            'userId' => 2,
            'title' => 'Đất ngay Phòng khám đa khoa SG 80m2 giá đầu tư',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 4200000000,
            'imageFolderName' => 'imageFolderOfPost13',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        $data14 = [
            'userId' => 2,
            'title' => 'TÔI ĐANG CÀN TIỀN BÁN GẤP LẠI CĂN NHÀ GIÁ CỰC RẺ',
            'categoryId' => 2,
            'regionId' => 2,
            'sellerId' => 2,
            'postOfTypeId' => 2,
            'statusOfPostId' => 2,
            'address' => '123 Dien Bien Phu',
            'area' => 500,
            'directionId' => 2,
            'contentPost' => 'Dang can tien - Ban gap - Giam gia cho nguoi co thien chi',
            'price' => 2300000000,
            'imageFolderName' => 'imageFolderOfPost14',
            'imagePost1' => 'image1.png',
            'imagePost2' => 'image2.png',
            'imagePost3' => 'image3.png',
            'imagePost4' => 'image4.png',
            'imagePost5' => 'image5.png',
            'imagePost6' => 'image6.png',
            'created_at' => '2019/11/02',
            'post_availability_status_id' => 1,
            'ableComposition' => true
        ];

        DB::table('posts')->insert($data1);
        DB::table('posts')->insert($data2);
        DB::table('posts')->insert($data3);
        DB::table('posts')->insert($data4);
        DB::table('posts')->insert($data5);
        DB::table('posts')->insert($data6);
        DB::table('posts')->insert($data7);
        DB::table('posts')->insert($data8);
        DB::table('posts')->insert($data9);
        DB::table('posts')->insert($data10);
        DB::table('posts')->insert($data11);
        DB::table('posts')->insert($data12);
        DB::table('posts')->insert($data13);
        DB::table('posts')->insert($data14);
    }
}
