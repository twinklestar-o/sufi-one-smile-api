<?php

namespace Database\Seeders;

use App\Models\MsAssetBranch;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // // AreaSeeder::class,
            // CollectionsSeeder::class,
            // JabatanSeeder::class,
            // JabatanSFISeeder::class,
            // TypeSeeder::class,

            // purpose::class,
            // AreaSeeder::class,
            // BranchSeeder::class,
            // ProductSeeder::class,
            // DealerSeeder::class,
            MsAssetBranchSeeder::class,
            AssetDetailSeeder::class,
        ]);
    }
}