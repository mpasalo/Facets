<?php

namespace Database\Seeders;

use Database\Seeders\GendersSeeder;
use Database\Seeders\ItemClassificationSeeder;
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
            ItemClassificationSeeder::class,
            ItemTypesSeeder::class,
            ItemSeeder::class,
        ]);
    }
}
