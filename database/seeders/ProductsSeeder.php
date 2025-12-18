<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Soap',
                'price' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shampoo',
                'price' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toothpaste',
                'price' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Product::insert($products);
    }
}
