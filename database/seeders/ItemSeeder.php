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
            'type_id' => 5
        ]);

        Item::create([
            'name'    => 'Brooches and Pins',
            'type_id' => 5
        ]);

        Item::create([
            'name'    => 'Watches',
            'type_id' => 5
        ]);

        Item::create([
            'name'    => 'Chains',
            'type_id' => 5
        ]);

        Item::create([
            'name'    => 'Earrings',
            'type_id' => 5
        ]);

        Item::create([
            'name'    => 'Rings',
            'type_id' => 5
        ]);

        Item::create([
            'name'    => 'Clutches',
            'type_id' => 7
        ]);
        
        Item::create([
            'name'    => 'Handbags',
            'type_id' => 7
        ]);
        
        Item::create([
            'name'    => 'Backpacks',
            'type_id' => 7
        ]);
    }
}
