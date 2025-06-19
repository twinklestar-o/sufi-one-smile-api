<?php

namespace Database\Seeders;

use App\Models\Dealer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dealers = [
            ['code' => 'BITPKU-03-4W', 'name' => 'PT. BUANA INDOMOBIL TRADA (SUZUKI SUDIRMAN)'],
            ['code' => 'BITJ-18-4W-AS', 'name' => 'PT. BUANA INDOMOBIL TRADA ALAM SUTERA'],
            ['code' => 'BITJ-01-4W-BDG', 'name' => 'PT. BUANA INDOMOBIL TRADA BANDENGAN'],
            ['code' => 'BITS-00-4W-BNY', 'name' => 'PT. BUANA INDOMOBIL TRADA BANYUWANGI'],
            ['code' => 'BITJ-05-4W-BSD', 'name' => 'PT. BUANA INDOMOBIL TRADA BSD'],
            ['code' => 'BITJ-15-4W-CP', 'name' => 'PT. BUANA INDOMOBIL TRADA CIPULIR'],
            ['code' => 'BITJ-03-4W-STR', 'name' => 'PT. BUANA INDOMOBIL TRADA DANAU SUNTER'],
            ['code' => 'BITJ-02-4W-DS', 'name' => 'PT. BUANA INDOMOBIL TRADA DEWI SARTIKA'],
            ['code' => 'BITS-13-4W-BITSD', 'name' => 'PT. BUANA INDOMOBIL TRADA DIPONEGORO'],
            ['code' => 'BITPKU-04-4W-DRI', 'name' => 'PT. BUANA INDOMOBIL TRADA DURI'],
            ['code' => 'BITJ-06-4W-GS', 'name' => 'PT. BUANA INDOMOBIL TRADA GADING SERPONG'],
            ['code' => 'BITJ-19-4W-GRS', 'name' => 'PT. BUANA INDOMOBIL TRADA GRAND WISATA'],
            ['code' => 'BITJ-09-4W-HI', 'name' => 'PT. BUANA INDOMOBIL TRADA HARAPAN INDAH'],
            ['code' => 'BITJ-00-4W-JGC', 'name' => 'PT. BUANA INDOMOBIL TRADA JGC'],
            ['code' => 'BITS-00-4W-KLR', 'name' => 'PT. BUANA INDOMOBIL TRADA KALI RUNGKUT'],
            ['code' => 'BITS-01-4W-BITSK', 'name' => 'PT. BUANA INDOMOBIL TRADA KENJERAN'],
            ['code' => 'BITPKU-04-4W-SMNKRC', 'name' => 'PT. BUANA INDOMOBIL TRADA KERINCI'],
            ['code' => 'BITS-00-4W-LM', 'name' => 'PT. BUANA INDOMOBIL TRADA LAMONGAN'],
            ['code' => 'BITJ-10-4W-CKR', 'name' => 'PT. BUANA INDOMOBIL TRADA LIPPO CIKARANG'],
            ['code' => 'BITS-01-4W-BITSM', 'name' => 'PT. BUANA INDOMOBIL TRADA MALANG'],
            ['code' => 'BITS-14-4W-BITSM', 'name' => 'PT. BUANA INDOMOBIL TRADA MANYAR'],
            ['code' => 'BITS-00-4W-MNG', 'name' => 'PT. BUANA INDOMOBIL TRADA MENGANTI'],
            ['code' => 'BITJ-04-4W-HRY', 'name' => 'PT. BUANA INDOMOBIL TRADA MT. HARYONO'],
            ['code' => 'BITS-00-4W-NGA', 'name' => 'PT. BUANA INDOMOBIL TRADA NGANJUK'],
            ['code' => 'BITJ-11-4W-PIK', 'name' => 'PT. BUANA INDOMOBIL TRADA PANTAI INDAH KAPUK'],
            ['code' => 'BITS-00-4W-PAS', 'name' => 'PT. BUANA INDOMOBIL TRADA PASURUAN'],
            ['code' => 'BITS-00-4W-PRO', 'name' => 'PT. BUANA INDOMOBIL TRADA PROBOLINGGO'],
            ['code' => 'BITJ-01-4W-PG', 'name' => 'PT. BUANA INDOMOBIL TRADA PULOGADUNG'],
            ['code' => 'BITJ-07-4W-PI', 'name' => 'PT. BUANA INDOMOBIL TRADA PURI INDAH'],
            ['code' => 'BITJ-14-4W-SW', 'name' => 'PT. BUANA INDOMOBIL TRADA SAWANGAN'],
            ['code' => 'BITPKU-06-4W-SA', 'name' => 'PT. BUANA INDOMOBIL TRADA SOETA'],
            ['code' => 'BITJ-17-4W-TT', 'name' => 'PT. BUANA INDOMOBIL TRADA TANAH TINGGI'],
            ['code' => 'BITPKU-07-4W-TT', 'name' => 'PT. BUANA INDOMOBIL TRADA TUANKU TAMBUSAI'],
            ['code' => 'BITPKU-05-4W-UB', 'name' => 'PT. BUANA INDOMOBIL TRADA UJUNG BATU'],
        ];

        foreach ($dealers as $dealer) {
            Dealer::create($dealer);
        }
    }
}