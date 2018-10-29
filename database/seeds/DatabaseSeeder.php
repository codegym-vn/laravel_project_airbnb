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
//         $this->call(Image::class);
//        $this->call(Post::class);
        $this->call(Address::class);
    }
}
