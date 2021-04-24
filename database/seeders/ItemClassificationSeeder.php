<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ItemClassification::factory()->create(['name' => 'Accessories']);
    }
}
