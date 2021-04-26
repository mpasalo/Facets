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
            'Bags',
        ];

        foreach ($names as $name) {
            ItemType::create([
                'name'              => $name,
                'item_classification_id' => 1
            ]);
        }
    }
}
