<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name'          =>  'R1',
            'slug'          =>  'yamaha',
            'logo'          =>  '',
        ]);
        Brand::create([
            'name'          =>  'Ninja',
            'slug'          =>  'ninja',
            'logo'          =>  '',
        ]);
        Brand::create([
            'name'          =>  'Ducati',
            'slug'          =>  'ducati',
            'logo'          =>  '',
        ]);
        Brand::create([
            'name'          =>  'Lamborghini',
            'slug'          =>  'lamborghini',
            'logo'          =>  '',
        ]);

    }
}
