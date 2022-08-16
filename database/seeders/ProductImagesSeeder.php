<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::create([
            'product_id'    =>  '1',
            'full'          =>  'products/1641958613_r1 2014.jpg',
        ]);
        ProductImage::create([
            'product_id'    =>  '2',
            'full'          =>  'products/1641958370_r1 2020.jpg',
        ]);
        ProductImage::create([
            'product_id'    =>  '3',
            'full'          =>  'products/1641958443_2015-kawasaki-ninja-h2r-galler-4057-8124-1415952672.jpg',
        ]);
        ProductImage::create([
            'product_id'    =>  '4',
            'full'          =>  'products/NINJA ZX-10R ABS.png',
        ]);
        ProductImage::create([
            'product_id'    =>  '5',
            'full'          =>  'products/1641958967_ducati banigale v4.jpg',
        ]);
        ProductImage::create([
            'product_id'    =>  '6',
            'full'          =>  'products/1641958850_dau-xe-lamborghini-veneno.jpg',
        ]);
    }
}
