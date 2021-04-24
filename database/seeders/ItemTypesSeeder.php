<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Seeder;

class ItemTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Gloves',
            'Caps and Hats',
            'Purses',
            'Belts',
            'Jewelry and Watches',
            'Scarves',
            'Cups',
        ];

        foreach ($names as $name) {
            ItemType::create([
                'name'              => $name,
                'classification_id' => 1
            ]);
        }
    }
}
