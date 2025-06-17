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
        Collections::create(['name' => 'Jabatan']);
        Collections::create(['name' => 'Purpose']);
        Collections::create(['name' => 'Type']);
        Collections::create(['name' => 'Cabang']);
        Collections::create(['name' => 'Area']);
    }
}
