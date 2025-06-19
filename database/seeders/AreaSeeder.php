<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['code' => '01', 'name' => 'SFI JABODETABEKSER'],
            ['code' => '02', 'name' => 'SFI JAWA BARAT'],
            ['code' => '03', 'name' => 'SFI JAWA TENGAH'],
            ['code' => '04', 'name' => 'SFI JAWA TIMUR'],
            ['code' => '05', 'name' => 'SFI SULAWESI'],
        ];

foreach ($areas as $area) {
    Area::create($area);
}
    }
}