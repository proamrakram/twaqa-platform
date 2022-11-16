<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'age' => 23,
            'img' => null,
            'full_name' => 'amrakram',
           // 'first_name' => 'amr',
            //'second_name' => 'akram',
            'country_id' => 1,
            'city_id' => 1,
            'phonenumber' => '0599916672',
            'phonenumber2' => '0569062255',
            'whatsapp' => 'https://www.whatsapp.com',
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://www.twitter.com',
            'position' => 'مهندس',
            'parent_position' => null,
            'registered_at' => now(),
            'department' => 'men',
            'course_category_id' => null,
            'gender' => 'male',
            'user_type' => 'admin',
            'is_delete' => '0',
            'available_balance' => '100',
            'suspended_balance' => '30',
            'active' => 1
        ]);
    }
}
