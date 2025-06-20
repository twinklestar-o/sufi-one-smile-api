<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(['kode' => 1, 'name' => 'Direct Visit Dealer']);
        Type::create(['kode' => 2, 'name' => 'Reguler Meeting On Site']);
        Type::create(['kode' => 3, 'name' => 'Reguler Meeting Online']);
        Type::create(['kode' => 4, 'name' => 'Diskusi On Site']);
        Type::create(['kode' => 5, 'name' => 'Diskusi Online']);
    }
}