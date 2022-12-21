<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert([
            'name' => 'AZUNDI Boxer-Briefs',
            'price' =>  '$15.00 USD',
            'description' => 'An ode to classic men’s boxer-briefs. Crafted with the finest fabric for the most pleasurable wearing experience, featuring a supportive yet silky waistband with our logo hand-pressed on each pair. 95% Modal 5% Elastane.',
            'gallery' => 'https://cdn.shopify.com/s/files/1/0518/8249/2088/products/BlackMain1_540x_1210x1210_2x_f2f31161-5e13-49eb-b74b-a85e5ed5ae0e.jpg?v=1623757966',
        ]);
    }
}
