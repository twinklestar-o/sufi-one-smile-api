<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AreaSeeder::class,
            CollectionsSeeder::class,
            JabatanSeeder::class,
            JabatanSFISeeder::class,
            TypeSeeder::class,
            BranchSeeder::class,
            ProductSeeder::class,
            DealerSeeder::class,
            purpose::class,
            MsAssetBranchSeeder::class,
            AssetDetailSeeder::class,
        ]);
    }
}