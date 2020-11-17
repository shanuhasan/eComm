<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
                "name"=>"LG",
                "price"=>"11000",
                "description"=>"This is LG Brand with 8GB RAM 256GB internal",
                "category"=>"mobile",
                "gallery"=>"https://www.lg.com/in/images/mobile-phones/md06186738/01_Thumb-350_04092019.jpg",
            ],
            [
                "name"=>"Oppo",
                "price"=>"11000",
                "description"=>"This is oppo",
                "category"=>"mobile",
                "gallery"=>"https://n4.sdlcdn.com/imgs/i/1/l/Oppo-A5-2020-64GB-4-SDL344663750-1-bd198.png",
            ],            
        ]);
    }
}
