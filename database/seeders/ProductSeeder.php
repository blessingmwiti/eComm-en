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
            'name'=>'Tecno Phantom',
            'price'=>'34560',
            'category'=>'phone',
            'description'=>'one of tecno phones',
            'gallery'=>'https://imageio.forbes.com/specials-images/imageserve/6391a85195ec4050743650e0/0x0.jpg?format=jpg&width=1200'
        ]);
    }
}
