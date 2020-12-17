<?php

use Illuminate\Database\Seeder;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'BebekMacho69',
            'email' => 'bebekmacho@mail.com',
            'password' => '$2y$10$iFBWwnBjBAkUrUiaOqctuOkW2QeX7cilrVZnOHaTTYiz4GULXMN/K',
            'is_admin' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Andi',
            'email' => 'andi@mail.com',
            'password' => '$2y$10$.JczR53a3upyWPHCotvu.eXlHyL9im.j1eDV4ufzjNL1ck5t1Ez1e',
        ]);
    }
}
