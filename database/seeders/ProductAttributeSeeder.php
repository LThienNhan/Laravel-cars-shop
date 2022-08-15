<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductAttribute;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::create([
            'quantity'      =>  202,
            'price'       =>  19000,
            'product_id'   =>  1,
        ]);
        ProductAttribute::create([
            'quantity'      =>  232,
            'price'       =>  24500,
            'product_id'   =>  2,
        ]);
        ProductAttribute::create([
            'quantity'      =>  132,
            'price'       =>  44500,
            'product_id'   =>  3,
        ]);
        ProductAttribute::create([
            'quantity'      =>  191,
            'price'       =>  30500,
            'product_id'   =>  4,
        ]);
        ProductAttribute::create([
            'quantity'      =>  164,
            'price'       =>  29000,
            'product_id'   =>  5,
        ]);
        ProductAttribute::create([
            'quantity'      =>  74,
            'price'       =>  950000,
            'product_id'   =>  6,
        ]);
    }
}
