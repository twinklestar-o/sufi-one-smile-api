<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatan::create(['name' => 'Area Manager', 'kode' => 'AM']);
        Jabatan::create(['name' => 'Branch Manager', 'kode' => 'BM']);
        Jabatan::create(['name' => 'DCSM Head', 'kode' => 'DCSMH']);
        Jabatan::create(['name' => 'Marketing Head', 'kode' => 'MH']);
        
    }
}
