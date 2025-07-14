<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['code' => 'MBBR', 'name' => 'Mobil Baru'],
            ['code' => 'MBBK', 'name' => 'Mobil Bekas'],
            ['code' => 'MTBR', 'name' => 'Motor Baru'],
            ['code' => 'MTBK', 'name' => 'Motor Bekas'],
        ];

        foreach ($products as $product) {
            // Gunakan updateOrCreate untuk handle duplicate
            Product::updateOrCreate(
                ['code' => $product['code']], // Kondisi pencarian
                $product // Data yang akan di-insert/update
            );
        }
        echo "Product seeder completed successfully!\n";
    }
}