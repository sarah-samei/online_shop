<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jewellery_name=array('flower', 'diamond', 'star');
        $brand_name=array('LV', 'LV', 'channel' );
        $gold_type=array('golden', 'golden', 'white' );
        $jewellery_type=array('ring', 'ring', 'ring');
        $price=array('1000', '5000', '2500');

        for($i=0;$i<3;$i++) {
            \App\Models\Product::create([
                "jewellery_name" => $jewellery_name[$i],
                "brand_name" => $brand_name[$i],
                "gold_type" => $gold_type[$i],
                "jewellery_type" => $jewellery_type[$i],
                "price" => $price[$i],
            ]);
        }
    }
}
