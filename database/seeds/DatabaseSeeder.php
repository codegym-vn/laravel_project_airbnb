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
        $this->call(kindHouse::class);
//        $this->call(Address::class);
        $this->call(HousesTableSeeder::class);
        $this->call(Image::class);
        $this->call(Post::class);
        $this->call(CalenderTableSeeder::class);
    }
}
