<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategorySeeder::class);
         $this->call(DirectionSeeder::class);
         $this->call(HelpMessageSeeder::class);
         $this->call(LevelOfUserSeeder::class);
         $this->call(PostOfTypeSeeder::class);
         $this->call(RegionSeeder::class);
         $this->call(SellerSeeder::class);
         $this->call(StatusOfPostSeeder::class);
         $this->call(StatusOfUserSeeder::class);
         $this->call(PostAvailabilityStatusSeeder::class);
//        $this->call(Verifymail::class);

        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);

        $this->call(CustomerSeeder::class);




    }
}
