<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'brand_id'      =>  '1',
            'sku'           =>  'R1 2014',
            'name'          =>  'R1 2014',
            'slug'          =>  'yamaha',
            'description'   =>  'r1 2014 is a great product from the manufacturer Yamaha with the best construction and great looks',
            'quantity'      => 202,
            'weight'        => 159,
            'price'         => 19000,
            'sale_price'    => 17990,
            'status'        => 1,
            'featured'      => 1
        ]);
        Product::create([
            'brand_id'      =>  '1',
            'sku'           =>  'R1 2022',
            'name'          =>  'R1 2022',
            'slug'          =>  'yamaha',
            'description'   =>  'r1 2022 is a great product from the manufacturer Yamaha with the best construction and great looks',
            'quantity'      => 232,
            'weight'        => 189,
            'price'         => 24500,
            'status'        => 1,
            'featured'      => 1
        ]);
        Product::create([
            'brand_id'      =>  '2',
            'sku'           =>  'Kawasaki Ninja H2R',
            'name'          =>  'Kawasaki Ninja H2R',
            'slug'          =>  'ninja',
            'description'   =>  'Kawasaki Ninja H2R is a great product from the manufacturer Kawasaki Ninja with the best construction and great looks',
            'quantity'      => 132,
            'weight'        => 209,
            'price'         => 44500,
            'sale_price'    => 40870,
            'status'        => 1,
            'featured'      => 1
        ]);
        Product::create([
            'brand_id'      =>  '2',
            'sku'           =>  'Ninja ZX-10R',
            'name'          =>  'Ninja ZX-10R',
            'slug'          =>  'ninja',
            'description'   =>  'Ninja ZX-10R is a great product from the manufacturer Kawasaki Ninja with the best construction and great looks',
            'quantity'      => 191,
            'weight'        => 178,
            'price'         => 30500,
            'status'        => 1,
            'featured'      => 1
        ]);
        Product::create([
            'brand_id'      =>  '3',
            'sku'           =>  'Ducati Banigale V4',
            'name'          =>  'Ducati Banigale V4',
            'slug'          =>  'ducati',
            'description'   =>  'Ducati Banigale V4 is a great product from the manufacturer Ducati with the best construction and great looks',
            'quantity'      => 164,
            'weight'        => 167,
            'price'         => 29000,
            'status'        => 1,
            'featured'      => 1
        ]);
        Product::create([
            'brand_id'      =>  '4',
            'sku'           =>  'Lamborghini Veneo 2018',
            'name'          =>  'Lamborghini Veneo 2018',
            'slug'          =>  'lamborghini',
            'description'   =>  'Lamborghini Veneo 2018 is a great product from the manufacturer Lamborghini with the best construction and great looks',
            'quantity'      => 74,
            'weight'        => 1490,
            'price'         => 980000,
            'sale_price'    => 900000,
            'status'        => 1,
            'featured'      => 1
        ]);
    }
}
