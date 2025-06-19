<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['code' => 'MBBR', 'name' => 'Mobil Baru'],
            ['code' => 'MBBK', 'name' => 'Mobil Bekas'],
            ['code' => 'MTBR', 'name' => 'Motor Baru'],
            ['code' => 'MTBK', 'name' => 'Motor Bekas'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}