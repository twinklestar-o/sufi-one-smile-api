<?php

namespace Database\Seeders;

use App\Models\Collections;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collections::create(['name' => 'Area']);
        Collections::create(['name' => 'Cabang']);
        Collections::create(['name' => 'Dealer']);
        Collections::create(['name' => 'Jabatan']);
        Collections::create(['name' => 'Jabatan SFI']);
        Collections::create(['name' => 'Produk']);
        Collections::create(['name' => 'Tipe Visit']);
        Collections::create(['name' => 'Tujuan Visit']);
    }
}
