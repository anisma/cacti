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
        $this->call(ColorSeeder::class);
        $this->call(GenusSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
