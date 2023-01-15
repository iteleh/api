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
        \App\Models\User::factory(5)->create();
        //factory(App\Models\product::class,50)->create();

        \App\Models\product::factory(30)->create();
        \App\Models\review::factory(300)->create();

        
    }
}
