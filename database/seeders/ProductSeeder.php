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
                'name'=>'iPhone 14 pro plus',
                'price'=>'220450',
                'category'=>'phone',
                'description'=>'latest iPhone release',
                'gallery'=>'https://www.apple.com/newsroom/images/product/iphone/standard/Apple-iPhone-14-Pro-iPhone-14-Pro-Max-hero-220907.jpg.news_app_ed.jpg'
            ],
            [
                'name'=>'Samsung S23 ultra',
                'price'=>'124500',
                'category'=>'phone',
                'description'=>'latest samsung release',
                'gallery'=>'https://image-us.samsung.com/us/smartphones/galaxy-s23-ultra/images/galaxy-s23-ultra-highlights-kv.jpg'
            ],
            [
                'name'=>'oppo reno 8t 5g',
                'price'=>'56890',
                'category'=>'phone',
                'description'=>'latest oppo release',
                'gallery'=>'https://amateurphotographer.com/wp-content/uploads/sites/7/2022/09/Oppo-Reno-8-Pro-main.jpg'
            ]
        ]);
    }
}
