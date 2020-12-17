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
        $this->call(category_seeder::class);
        $this->call(products_seeder::class);
        $this->call(users_seeder::class);
    }
}
