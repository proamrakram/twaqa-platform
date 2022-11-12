<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_settings')->insert(
            [
                'key' => 'default_currency',
                'value' => '1',
            ]
        );
        
        DB::table('website_settings')->insert(
            [
                'key' => 'balance_period_hold',
                'value' => '15',
            ]
        );
        
    }
}
