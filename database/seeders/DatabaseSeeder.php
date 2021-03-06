<?php

namespace Database\Seeders;

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
        $this->call(PostavshikSeeder::class);
        $this->call(ProductSeeder::class);
         $this->call(DirectionSeeder::class);
          $this->call(EmploeeSeeder::class);
    }
}
