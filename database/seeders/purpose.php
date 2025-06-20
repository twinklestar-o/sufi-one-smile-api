<?php

namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\purpose as ModelsPurpose;

class purpose extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsPurpose::create(['name' => 'EVENT MARKETING', 'kode' => '1']);
        ModelsPurpose::create(['name' => 'SARAN/COMPLAIN' ,'kode' => '2']);
        ModelsPurpose::create(['name' => 'KORDINASI RUTIN', 'kode' => '3']);
        ModelsPurpose::create(['name' => 'MEETING RUTIN', 'kode' => '4']);
        ModelsPurpose::create(['name' => 'SETTING TARGET', 'kode' => '5']);
        ModelsPurpose::create(['name' => 'SOSIALISASI REGULASI', 'kode' => '6']);
        ModelsPurpose::create(['name' => 'SOSIALISASI/DISKUSI/EVALUASI PROGRAM', 'kode' => '7']);
    }
}
