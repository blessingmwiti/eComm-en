<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("products")->insert([
            [
                'name'=>'banner',
                'price'=>'100',
                'category'=>'banner',
                'description'=>'banner release',
                'gallery'=>'https://img.freepik.com/premium-photo/banner-panorama-new-york-cityscape-with-brooklyn-bridge-east-river-evening-time_41418-3785.jpg?w=2000'
            ],
            [
                'name'=>'banner',
                'price'=>'100',
                'category'=>'banner',
                'description'=>'banner release',
                'gallery'=>'https://www.evteqglobal.com/wp-content/uploads/2015/02/EVteQ-banner-2000x800.jpg'
            ],
            [
                'name'=>'banner',
                'price'=>'100',
                'category'=>'banner',
                'description'=>'banner release',
                'gallery'=>'https://www.telesto.com.au/wp-content/uploads/2017/11/page-banner-network.jpg'
            ]
        ]);
    }
}
