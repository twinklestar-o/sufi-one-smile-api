<?php

namespace Database\Seeders;

use App\Models\JabatanSFI;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSFISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JabatanSFI::create(['name' => 'Area Manager', 'kode' => 'AM']);
        JabatanSFI::create(['name' => 'Branch Manager', 'kode' => 'BM']);
        JabatanSFI::create(['name' => 'DCSM Head', 'kode' => 'DCSMH']);
        JabatanSFI::create(['name' => 'Marketing Head', 'kode' => 'MH']);
        
    }
}