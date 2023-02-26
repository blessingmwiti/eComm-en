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
            'name'=>'iphone 14',
            'price'=>'Ksh 120450',
            'category'=>'phones',
            'description'=>'iphone latest release',
            'gallery'=>'https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-14-pro-max-.jpg'
            ],
            [
                'name'=>'tecno camon 12',
                'price'=>'Ksh 18450',
                'category'=>'phones',
                'description'=>'a tecno product',
                'gallery'=>'https://fdn2.gsmarena.com/vv/bigpic/tecno-camon-12.jpg'
            ],
            [
                'name'=>'samsung s23 ultra',
                'price'=>'Ksh 110450',
                'category'=>'phones',
                'description'=>'latest samsung release',
                'gallery'=>'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-ultra-5g.jpg'
            ]
        ]);
    }
}
