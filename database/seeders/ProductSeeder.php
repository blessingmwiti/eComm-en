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
                'price'=>'224560',
                'category'=>'phone',
                'description'=>'latest iphone release',
                'gallery'=>'https://www.apple.com/newsroom/images/product/iphone/standard/Apple-iPhone-14-Pro-iPhone-14-Pro-Max-hero-220907.jpg.og.jpg?202302100047'
            ],
            [
                'name'=>'Samsung s23 ultra',
                'price'=>'123450',
                'category'=>'phone',
                'description'=>'latest samsung release',
                'gallery'=>'https://www.zdnet.com/a/img/resize/d89afba9ea9e3e70deb4cc278ad48b7f145692cb/2022/02/10/7e46cdc1-24c7-4511-9282-6ea01e68707a/samsung-galaxy-s22-ultra-11.jpg?auto=webp&fit=crop&height=900&width=1200'
            ],
            [
                'name'=>'Oppo Reno 8t',
                'price'=>'55450',
                'category'=>'phone',
                'description'=>'latest reno release',
                'gallery'=>'https://i0.wp.com/tech-ish.com/wp-content/uploads/2023/02/IMG_5953-Large.jpeg?fit=1280%2C720&ssl=1'
            ],
            [
                'name'=>'Nokia',
                'price'=>'43450',
                'category'=>'phone',
                'description'=>'latest nokia release',
                'gallery'=>'https://cdn.images.express.co.uk/img/dynamic/59/1200x712/1663601_1.jpg'
            ]
        ]);
    }
}
