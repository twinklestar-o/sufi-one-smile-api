<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = [
            ['code' => '1005', 'area_code' => '01', 'name' => '1005 BOGOR - MTR'],
            ['code' => '1006', 'area_code' => '01', 'name' => '1006 BEKASI - MTR'],
            ['code' => '1011', 'area_code' => '01', 'name' => '1011 KELAPA GADING - MTR'],
            ['code' => '1026', 'area_code' => '01', 'name' => '1026 TANGERANG - MTR'],
            ['code' => '1034', 'area_code' => '01', 'name' => '1034 DEPOK - MTR'],
            ['code' => '1045', 'area_code' => '01', 'name' => '1045 KEDOYA - MTR'],
            ['code' => '1056', 'area_code' => '01', 'name' => '1056 SERANG - MTR'],
            ['code' => '1501', 'area_code' => '01', 'name' => '1501 KEDOYA - MBL'],
            ['code' => '1502', 'area_code' => '01', 'name' => '1502 SUNTER - MBL'],
            ['code' => '1506', 'area_code' => '01', 'name' => '1506 BEKASI - MBL'],
            ['code' => '1507', 'area_code' => '01', 'name' => '1507 TANGERANG - MBL'],
            ['code' => '1512', 'area_code' => '01', 'name' => '1512 BOGOR - MBL'],
            ['code' => '1516', 'area_code' => '01', 'name' => '1516 SERANG - MBL'],
            ['code' => '1518', 'area_code' => '01', 'name' => '1518 DEWI SARTIKA - MBL'],
            ['code' => '1543', 'area_code' => '01', 'name' => '1543 DEPOK - MBL'],
            ['code' => '1059', 'area_code' => '02', 'name' => '1059 BANDUNG 2 - MTR'],
            ['code' => '1024', 'area_code' => '02', 'name' => '1024 TASIKMALAYA - MTR'],
            ['code' => '1032', 'area_code' => '02', 'name' => '1032 CIREBON - MTR'],
            ['code' => '1008', 'area_code' => '02', 'name' => '1008 KARAWANG - MTR'],
            ['code' => '1505', 'area_code' => '02', 'name' => '1505 BANDUNG - MBL'],
            ['code' => '1508', 'area_code' => '02', 'name' => '1508 KARAWANG - MBL'],
            ['code' => '1528', 'area_code' => '02', 'name' => '1528 CIREBON - MBL'],
            ['code' => '1554', 'area_code' => '02', 'name' => '1554 TASIKMALAYA - MBL'],
            ['code' => '1044', 'area_code' => '02', 'name' => '1044 KUDUS - MTR'],
            ['code' => '1065', 'area_code' => '03', 'name' => '1065 PURWOKERTO - MBTR'],
            ['code' => '1013', 'area_code' => '03', 'name' => '1013 YOGYA - MTR'],
            ['code' => '1014', 'area_code' => '03', 'name' => '1014 SOLO - MTR'],
            ['code' => '1015', 'area_code' => '03', 'name' => '1015 SEMARANG - MTR'],
            ['code' => '1031', 'area_code' => '03', 'name' => '1031 PEKALONGAN - MTR'],
            ['code' => '1509', 'area_code' => '03', 'name' => '1509 YOGYAKARTA - MBL'],
            ['code' => '1510', 'area_code' => '03', 'name' => '1510 SEMARANG - MBL'],
            ['code' => '1517', 'area_code' => '03', 'name' => '1517 PURWOKERTO - MBL'],
            ['code' => '1515', 'area_code' => '03', 'name' => '1515 KUDUS - MBL'],
            ['code' => '1524', 'area_code' => '03', 'name' => '1524 TEGAL - MBL'],
            ['code' => '1534', 'area_code' => '03', 'name' => '1534 SOLO - MBL'],
            ['code' => '1016', 'area_code' => '04', 'name' => '1016 SURABAYA - MTR'],
            ['code' => '1017', 'area_code' => '04', 'name' => '1017 MALANG - MTR'],
            ['code' => '1019', 'area_code' => '04', 'name' => '1019 GRESIK - MTR'],
            ['code' => '1007', 'area_code' => '04', 'name' => '1007 KEDIRI - MTR'],
            ['code' => '1513', 'area_code' => '04', 'name' => '1513 MALANG - MBL'],
            ['code' => '1504', 'area_code' => '04', 'name' => '1504 SURABAYA - MBL'],
            ['code' => '1525', 'area_code' => '04', 'name' => '1525 KEDIRI - MBL'],
            ['code' => '1519', 'area_code' => '04', 'name' => '1519 GRESIK - MBL'],
            ['code' => '1068', 'area_code' => '05', 'name' => '1068 PAREPARE - MTR'],
            ['code' => '1076', 'area_code' => '05', 'name' => '1076 PALU - MTR'],
            ['code' => '1099', 'area_code' => '05', 'name' => '1099 MANADO 2 TERNATE - MTR'],
            ['code' => '1002', 'area_code' => '05', 'name' => '1002 MAKASAR - MTR'],
            ['code' => '1052', 'area_code' => '05', 'name' => '1052 KENDARI - MTR'],
            ['code' => '1053', 'area_code' => '05', 'name' => '1053 GORONTALO - MTR'],
            ['code' => '1040', 'area_code' => '05', 'name' => '1040 MANADO - MTR'],
            ['code' => '1514', 'area_code' => '05', 'name' => '1514 MAKASAR - MBL'],
            ['code' => '1539', 'area_code' => '05', 'name' => '1539 GORONTALO - MBL'],
            ['code' => '1540', 'area_code' => '05', 'name' => '1540 PALU - MBL'],
            ['code' => '1541', 'area_code' => '05', 'name' => '1541 KENDARI - MBL'],
            ['code' => '1533', 'area_code' => '05', 'name' => '1533 MANADO - MBL'],
            ['code' => '1551', 'area_code' => '05', 'name' => '1551 PAREPARE - MBL'],
        ];

        foreach ($branches as $branch) {
            Branch::create($branch);
        }
    }
}