<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Gender::factory()->create(['name' => 'Women']);
    }
}
