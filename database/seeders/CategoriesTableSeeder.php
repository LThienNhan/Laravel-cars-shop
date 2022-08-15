<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'          =>  'Root',
            'description'   =>  'This is the root category, don\'t delete this one',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);
        Category::create([
            'name'          =>  'Product',
            'slug'          =>  'moto',
            'description'   =>  'this is page moto',
            'parent_id'     =>  '1',
            'featured'     =>  0,
            'menu'          =>  1,
        ]);
        Category::create([
            'name'          =>  'Yamaha',
            'slug'          =>  'yamaha',
            'description'   =>  'this is page Yamaha',
            'parent_id'     =>  '2',
            'featured'     =>  0,
            'menu'          =>  1,
        ]);
        Category::create([
            'name'          =>  'Ninja',
            'slug'          =>  'ninja',
            'description'   =>  'this is page Ninja',
            'parent_id'     =>  '2',
            'featured'     =>  0,
            'menu'          =>  1,
        ]);
        Category::create([
            'name'          =>  'Ducati',
            'slug'          =>  'ducati',
            'description'   =>  'this is page Ducati',
            'parent_id'     =>  '2',
            'featured'     =>  0,
            'menu'          =>  1,
        ]);
        Category::create([
            'name'          =>  'Lamborghini',
            'slug'          =>  'lamborghini',
            'description'   =>  'this is page Lamborghini',
            'parent_id'     =>  '2',
            'featured'     =>  0,
            'menu'          =>  1,
        ]);
    }
}
