<?php

namespace Database\Seeders;

use App\Models\MsAssetBranch;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AreaSeeder::class,
            AssetDetailSeeder::class,
            BranchSeeder::class,
            CollectionsSeeder::class,
            DealerSeeder::class,
            JabatanSeeder::class,
            JabatanSFISeeder::class,
            MsAssetBranchSeeder::class,
            ProductSeeder::class,
            purpose::class,
            TypeSeeder::class,
        ]);
    }
}