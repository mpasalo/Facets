<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemTypeIds = [
            'Jewelry and Watches' => 5,
            'Cups'                => 7
        ];

        Item::create([
            'name'    => 'Bracelets',
            'item_type_id' => 5
        ]);

        Item::create([
            'name'    => 'Brooches and Pins',
            'item_type_id' => 5
        ]);

        Item::create([
            'name'    => 'Watches',
            'item_type_id' => 5
        ]);

        Item::create([
            'name'    => 'Chains',
            'item_type_id' => 5
        ]);

        Item::create([
            'name'    => 'Earrings',
            'item_type_id' => 5
        ]);

        Item::create([
            'name'    => 'Rings',
            'item_type_id' => 5
        ]);

        Item::create([
            'name'    => 'Clutches',
            'item_type_id' => 7
        ]);
        
        Item::create([
            'name'    => 'Handbags',
            'item_type_id' => 7
        ]);
        
        Item::create([
            'name'    => 'Backpacks',
            'item_type_id' => 7
        ]);
    }
}
