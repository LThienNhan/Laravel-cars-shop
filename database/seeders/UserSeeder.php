<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'    =>  "Company",
            'last_name'     =>  'Ceres',
            'email'         =>  'customer@gmail.com',
            'password'      =>  bcrypt('password'),
            'address'       =>  'Quận 1',
            'city'          =>  'Hồ Chí Minh',
            'country'       =>  'Việt Nam',
        ]);
    }
}
