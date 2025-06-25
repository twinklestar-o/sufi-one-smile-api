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
        Jabatan::create(['name' => 'BM', 'kode' => 'BM']);
        Jabatan::create(['name' => 'Direktur', 'kode' => 'Direktur']);
        Jabatan::create(['name' => 'GM', 'kode' => 'GM']);
        Jabatan::create(['name' => 'Owner', 'kode' => 'Owner']);
        Jabatan::create(['name' => 'RM_OM_MM_SM', 'kode' => 'RM_OM_MM_SM']);
        Jabatan::create(['name' => 'Sales', 'kode' => 'Sales']);
        Jabatan::create(['name' => 'SH', 'kode' => 'SH']);

        
    }
}
