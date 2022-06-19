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
        $this->call([
           // Permission::class,
           // User::class,
            //Category::class,
            specializationsSeeder::class,
           // BloodTypeSeeder::class,
        ]);

    }
}
