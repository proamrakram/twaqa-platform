<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $models  = [
            "currency_name_en" => ["egp","riyal", "dollar", "euro"],
            "currency_name_ar" => ["جنيه مصري","ريال سعودي", "دولار", "يورو"],
            "currency_name_sp" => ["Libra egipcia","rial", "dólar", "euro"],
            "egp" => [1,6.48,24.35,24.35],
            "riyal" => [0.15,1,3.76,3.76],
            "dollar" =>[0.041,0.27,1,1],
            "euro" => [0.041,0.27,1,1],
            "slug_name" => ["egp","riyal", "dollar", "euro"],
            "default" => [1 ,0 ,0 ,0],
        ];

        $x = 0;

        foreach ($models['currency_name_en'] as $model) {

            DB::table('currencies')->insert(
                [
                    'currency_name_en' => $models['currency_name_en'][$x],
                    'currency_name_ar' => $models['currency_name_ar'][$x],
                    'currency_name_sp' => $models['currency_name_sp'][$x],
                    'egp' => $models['egp'][$x],
                    'riyal' => $models['riyal'][$x],
                    'dollar' => $models['dollar'][$x],
                    'euro' => $models['euro'][$x],
                    'slug_name' => $models['slug_name'][$x],
                    'default' => $models['default'][$x],
                    'is_delete' => 0,
                ]
            );

            $x = $x + 1;
        }
    }
}
