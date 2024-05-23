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
        DB::table('tbl_product')->insert([
            [
                'name_product' => 'Jumbo Steak',
                'url_gambar' => 'product1.jpeg',
                'price' => 200000.00,
                'category' => 'food'
            ],
            [
                'name_product' => 'Cappucino',
                'url_gambar' => 'product2.jpeg',
                'price' => 25000.00,
                'category' => 'drink'
            ],
            [
                'name_product' => 'Sayap Balado',
                'url_gambar' => 'product3.jpeg',
                'price' => 25000.00,
                'category' => 'food'
            ],
            [
                'name_product' => 'Udang Kuah',
                'url_gambar' => 'product4.jpeg',
                'price' => 70000.00,
                'category' => 'food'
            ],
            [
                'name_product' => 'Chocolate Waffle',
                'url_gambar' => 'product5.jpeg',
                'price' => 20000.00,
                'category' => 'cake'
            ],
            [
                'name_product' => 'Medium Steak',
                'url_gambar' => 'product6.jpeg',
                'price' => 120000.00,
                'category' => 'food'
            ],
            [
                'name_product' => 'Steak With Mie',
                'url_gambar' => 'product7.webp',
                'price' => 40000.00,
                'category' => 'food'
            ],
            [
                'name_product' => 'Spaghetti Carbonara',
                'url_gambar' => 'product8.webp',
                'price' => 35000.00,
                'category' => 'mie'
            ],
            [
                'name_product' => 'Sprite',
                'url_gambar' => 'product9.webp',
                'price' => 20000.00,
                'category' => 'drink'
            ],
            [
                'name_product' => 'Ricec Bowl',
                'url_gambar' => 'product10.webp',
                'price' => 50000.00,
                'category' => 'food'
            ],
            [
                'name_product' => 'Vanillareo',
                'url_gambar' => 'product12.webp',
                'price' => 25000.00,
                'category' => 'drink'
            ],
            [
                'name_product' => 'Fried Chicken',
                'url_gambar' => 'product13.webp',
                'price' => 35000.00,
                'category' => 'food'
            ],
            [
                'name_product' => 'Cocacola',
                'url_gambar' => 'product14.webp',
                'price' => 20000.00,
                'category' => 'drink'
            ],
            [
                'name_product' => 'Green Tea Coffee',
                'url_gambar' => 'product15.webp',
                'price' => 25000.00,
                'category' => 'drink'
            ],
            [
                'name_product' => 'Lemon Water',
                'url_gambar' => 'product16.webp',
                'price' => 20000.00,
                'category' => 'drink'
            ],
            [
                'name_product' => 'Grapes Water',
                'url_gambar' => 'product18.webp',
                'price' => 20000.00,
                'category' => 'drink'
            ],
            [
                'name_product' => 'Vanilla Coffee',
                'url_gambar' => 'product19.webp',
                'price' => 35000.00,
                'category' => 'drink'
            ],
        ]);
    }
}
