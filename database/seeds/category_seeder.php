<?php

use Illuminate\Database\Seeder;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'categoryName' => 'Automotive',
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'Electronics',
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'Spareparts',
        ]);
        DB::table('categories')->insert([
            'categoryName' => 'Kit',
        ]);
    }
}
