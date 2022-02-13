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
        // $this->call(UserSeeder::class);
        factory(\App\Models\Topic::class, 20)->create();
        factory(\App\User::class, 20)->create();
        factory(\App\Models\Product::class, 20)->create();
//        $this->call(\App\Models\ProductSize::class);
//        $this->call(\App\Models\ProductColor::class);


    }
}
