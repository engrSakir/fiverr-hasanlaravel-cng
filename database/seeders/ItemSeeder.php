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
        $item = new Item();
        $item->name = 'Tea';
        $item->quantity = '5000';  //Quantity in Gram
        $item->save();

        $item = new Item();
        $item->name = 'Milk';
        $item->quantity = '1000';  //Quantity in Gram
        $item->save();

        $item = new Item();
        $item->name = 'Sugar';
        $item->quantity = '2000';  //Quantity in Gram
        $item->save();

    }
}
