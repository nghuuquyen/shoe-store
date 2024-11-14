<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Air Jordan 1 Low',
                'short_desc' => 'Comfortable sports shoes',
                'cart_desc' => 'red',
                'long_desc' => '<p>ALWAYS FRESH.</p> <p>Inspired by the original that debuted in 1985, the Air Jordan 1 Low offers a clean, classic look...</p>',
                'price' => 129.99,
                'main_image_url' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/.../air-jordan-1-low-shoes-lFCSjp.png',
                'category_id' => 1,
                'gender' => 0,
                'imported_date' => '2024-06-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Air Jordan 1 Low - White',
                'short_desc' => 'Short description',
                'cart_desc' => '',
                'long_desc' => '<p>ALWAYS FRESH.</p> <p>Inspired by the original that debuted in 1985, the Air Jordan 1 Low offers a clean, classic look...</p>',
                'price' => 120.00,
                'main_image_url' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/.../air-jordan-1-low-shoes-zTWr01.png',
                'category_id' => 1,
                'gender' => 0,
                'imported_date' => '2024-06-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike React Infinity 3',
                'short_desc' => 'Short description',
                'cart_desc' => 'cart desc',
                'long_desc' => '<p>Stay on Your Feet.</p> <p>Stay on your feet with soft, supportive cushioning...</p>',
                'price' => 389.99,
                'main_image_url' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/.../react-infinity-3-womens-road-running-shoes-XpNmlR.png',
                'category_id' => 2,
                'gender' => 0,
                'imported_date' => '2024-06-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike SB Zoom Pogo Plus Premium',
                'short_desc' => 'short desc',
                'cart_desc' => 'cart desc',
                'long_desc' => '<p>ALWAYS FRESH.</p> <p>The Zoom Pogo delivers a serious boost to any skate session...</p>',
                'price' => 85.49,
                'main_image_url' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/.../sb-zoom-pogo-plus-premium-skate-shoes-RvSjsf.png',
                'category_id' => 3,
                'gender' => 0,
                'imported_date' => '2024-06-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Air Jordan XXXVIII Low PF',
                'short_desc' => 'short desc',
                'cart_desc' => 'cart desc',
                'long_desc' => '<p>ALWAYS FRESH.</p> <p>Get grounded, stay grounded. The AJ XXXVIII is all about groundwork...</p>',
                'price' => 21.09,
                'main_image_url' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/.../air-jordan-xxxviii-low-pf-basketball-shoes-2lBnKn.png',
                'category_id' => 1,
                'gender' => 1,
                'imported_date' => '2024-06-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more products as needed
        ]);
    }
}
