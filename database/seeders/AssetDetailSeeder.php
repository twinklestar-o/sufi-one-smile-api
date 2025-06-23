<?php

namespace Database\Seeders;

use App\Models\AssetDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AssetDetailSeeder extends Seeder
{
    public function run()
    {
        // Nonaktifkan sementara foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        AssetDetail::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data = [
            [
                'MS_ASSET_DETAIL_ID' => 457,
                'KODE_ASET' => '1018-2-3-172-0804',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Personal Computer',
                'ITEM' => 'Premier 6845L Hitam',
                'CONDITION' => 'Broken',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 3941875,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 172,
                'TAHUN_PEMBELIAN' => '2004-08-10 00:00:00',
                'POSITION' => 'No Position',
                'ACQUISITION_DATE' => '2004-08-10 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'NO USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 3114,
                'KODE_ASET' => '1058-3-22-9760-0807',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Kursi',
                'ITEM' => 'Visitor Chair HP 18',
                'CONDITION' => 'Broken',
                'LOC_ROOM' => 'Lobby',
                'COST_AC' => 367875,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 9760,
                'TAHUN_PEMBELIAN' => '2007-08-06 00:00:00',
                'POSITION' => 'Security (HRD & GA)',
                'ACQUISITION_DATE' => '2007-08-06 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Security'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 3115,
                'KODE_ASET' => '1058-3-21-9766-0807',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Meja',
                'ITEM' => 'Office Desk HP OD 032',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 409500,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 9766,
                'TAHUN_PEMBELIAN' => '2007-08-06 00:00:00',
                'POSITION' => 'Back Office Staff',
                'ACQUISITION_DATE' => '2007-08-06 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Nafilah'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 3118,
                'KODE_ASET' => '1077-2-3-3363-1013',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Personal Computer',
                'ITEM' => 'Komputer Dell OPT 3010 MT with LCD Dell 18.5" E 1912 H',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 7620360,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 3363,
                'TAHUN_PEMBELIAN' => '2013-10-30 00:00:00',
                'POSITION' => 'Field Supervisor (MH, Coll Head, CA, Rec Head dll)',
                'ACQUISITION_DATE' => '2013-10-30 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Maryono'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 3138,
                'KODE_ASET' => '1047-3-22-009778-0807',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'AC (Air Conditioner)',
                'ITEM' => 'AC Panasonic 3/4 PK',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Storage/Brankas Room',
                'COST_AC' => 2825000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 9778,
                'TAHUN_PEMBELIAN' => '2007-08-07 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2007-08-07 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 3214,
                'KODE_ASET' => '1000-3-22-10282-1107',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Kursi',
                'ITEM' => 'Kursi Tamu Merk Idachi',
                'CONDITION' => 'Lost',
                'LOC_ROOM' => 'Lost',
                'COST_AC' => 695000,
                'BOK_VAL' => 0,
                'STATUS' => 'Not Exist',
                'NO_INVENTARIS' => 10282,
                'TAHUN_PEMBELIAN' => '2007-11-19 00:00:00',
                'POSITION' => 'Lost',
                'ACQUISITION_DATE' => '2007-11-19 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Lost'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 3415,
                'KODE_ASET' => '1065-2-7-1379-0208',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Router',
                'ITEM' => 'WIC-2T',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 4488165,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Meja Staff uk 12 x 7 x 75',
                'NO_INVENTARIS' => 1379,
                'TAHUN_PEMBELIAN' => '2008-02-27 00:00:00',
                'POSITION' => 'Assistant Manager',
                'ACQUISITION_DATE' => '2008-02-27 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4152,
                'KODE_ASET' => '1000-3-21-12997-0809',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Meja',
                'ITEM' => 'Meja Staff uk 120 x 70 x 75',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 1560660,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Meja Staff uk 120 x 70 x 75',
                'NO_INVENTARIS' => 12997,
                'TAHUN_PEMBELIAN' => '2009-08-18 00:00:00',
                'POSITION' => 'No Position',
                'ACQUISITION_DATE' => '2009-08-18 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'NO USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4205,
                'KODE_ASET' => '1040-3-22-13273-0909',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Kursi',
                'ITEM' => 'High Point HP-418 warna biru',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Lobby',
                'COST_AC' => 2773050,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 13273,
                'TAHUN_PEMBELIAN' => '2009-09-29 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2009-09-29 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4288,
                'KODE_ASET' => '1068-3-20-13666-0810',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Filling cabinet',
                'ITEM' => 'Filling Cabinet 4 Laci Brother',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 1550000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 13666,
                'TAHUN_PEMBELIAN' => '2010-08-12 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2010-08-12 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4293,
                'KODE_ASET' => '1006-3-20-13736-1010',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Filling cabinet',
                'ITEM' => 'Rak Besi Siku',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 1500000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 13736,
                'TAHUN_PEMBELIAN' => '2010-10-02 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2010-10-02 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4297,
                'KODE_ASET' => '1026-3-20-7064-1005',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Filling cabinet',
                'ITEM' => 'Filling Cabinet Brother B-104',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 900000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 7064,
                'TAHUN_PEMBELIAN' => '2005-10-24 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2005-10-24 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4329,
                'KODE_ASET' => '1000-2-7-3354-1013',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Router',
                'ITEM' => 'Acces Point Set Uniquiti Unifi Acces Point 2,4 Ghz',
                'CONDITION' => 'Broken',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 2275000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Acces Point Set Uniquiti Unifi Acces Point 2,4 Ghz',
                'NO_INVENTARIS' => 3354,
                'TAHUN_PEMBELIAN' => '2013-10-08 00:00:00',
                'POSITION' => 'Back Office Supervisor (ADH, ALL SPV HO)',
                'ACQUISITION_DATE' => '2013-10-08 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4358,
                'KODE_ASET' => '1058-3-20-13771-1110',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Filling cabinet',
                'ITEM' => 'Filling Cabinet Brother B-201',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 1612000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 13771,
                'TAHUN_PEMBELIAN' => '2010-11-03 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2010-11-03 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4369,
                'KODE_ASET' => '1068-3-20-13871-0111',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Filling cabinet',
                'ITEM' => 'Filling Cabinet 4 L Brother',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 1550000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 13871,
                'TAHUN_PEMBELIAN' => '2011-01-28 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2011-01-28 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4395,
                'KODE_ASET' => '1000-3-14-5324-1202',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Phone Set/Telepon',
                'ITEM' => 'Telephone Set Panasonic KX-T7433',
                'CONDITION' => 'Lost',
                'LOC_ROOM' => 'Lost',
                'COST_AC' => 1430520,
                'BOK_VAL' => 0,
                'STATUS' => 'Not Exist',
                'NO_INVENTARIS' => 5324,
                'TAHUN_PEMBELIAN' => '2002-12-16 00:00:00',
                'POSITION' => 'Lost',
                'ACQUISITION_DATE' => '2002-12-16 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Lost'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4472,
                'KODE_ASET' => '1076-2-7-1791-0109',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Router',
                'ITEM' => 'VIC-2FXS',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Server Room',
                'COST_AC' => 2454434.4,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 1791,
                'TAHUN_PEMBELIAN' => '2009-01-02 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2009-01-02 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4480,
                'KODE_ASET' => '1078-2-7-1843-0109',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Router',
                'ITEM' => 'Cisco 2801-HSEC/K9',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Server Room',
                'COST_AC' => 22007752.8,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 1843,
                'TAHUN_PEMBELIAN' => '2009-01-02 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2009-01-02 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4937,
                'KODE_ASET' => '1060-3-14-7574-0106',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Phone set/Telepon',
                'ITEM' => 'KX T7433 Display Keyphone',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Warehouse Room/ADP Room',
                'COST_AC' => 1510389,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 7574,
                'TAHUN_PEMBELIAN' => '2006-01-02 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2006-01-02 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4939,
                'KODE_ASET' => '1038-3-14-7583-0106',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Phone set/Telepon',
                'ITEM' => 'KX TDN 1232 Main Unit',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Server Room',
                'COST_AC' => 9697050,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 7583,
                'TAHUN_PEMBELIAN' => '2006-01-02 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2006-01-02 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 4966,
                'KODE_ASET' => '1000-2-7-16234-1217',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Router',
                'ITEM' => '1252 Catalyst 2960 Plus 24 10/100 + 2T/SFP LAN Lite',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 5232296.267,
                'BOK_VAL' => 872049,
                'STATUS' => 'Exists',
                'DESCRIPTION' => '1252 Catalyst 2960 Plus 24 10/100 + 2T/SFP LAN Lite',
                'NO_INVENTARIS' => 16234,
                'TAHUN_PEMBELIAN' => '2017-12-14 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2017-12-14 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'ALL USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5077,
                'KODE_ASET' => '1000-3-14-16483-0318',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Phone Set/Telepon',
                'ITEM' => '2245 Headset Telephone Avaya HW25IN',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 1815000,
                'BOK_VAL' => 423500,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 16483,
                'TAHUN_PEMBELIAN' => '2018-03-27 00:00:00',
                'POSITION' => 'No Position',
                'ACQUISITION_DATE' => '2018-03-27 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'No User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5174,
                'KODE_ASET' => '1087-3-21-16753-0807',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Meja',
                'ITEM' => 'Meja Kerja High Point OD 032',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 550000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Meja Kerja High Point OD 032',
                'NO_INVENTARIS' => 16753,
                'TAHUN_PEMBELIAN' => '2007-08-14 00:00:00',
                'POSITION' => 'Back Office Staff',
                'ACQUISITION_DATE' => '2007-08-14 00:00:00',
                'LAST_UPDATE' => '2024-02-12 11:11:14',
                'USER_UPDATE' => 'DWI.SOFI',
                'USERNAME' => 'USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5366,
                'KODE_ASET' => '1032-3-18-8293-0206',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Brankas',
                'ITEM' => 'Brankast DS 7 Laci Merk Priority',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Storage/Brankas Room',
                'COST_AC' => 11700000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Brankast DS 7 Laci Merk Priority',
                'NO_INVENTARIS' => 8293,
                'TAHUN_PEMBELIAN' => '2006-02-17 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2006-02-17 00:00:00',
                'LAST_UPDATE' => '2024-01-09 16:01:00',
                'USER_UPDATE' => 'DWI.SOFI',
                'USERNAME' => 'ALL USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5408,
                'KODE_ASET' => '1017-3-18-8475-0506',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Brankas',
                'ITEM' => 'Brankas DS 10 Laci Merk Priority',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Storage/Brankas Room',
                'COST_AC' => 16800000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 8475,
                'TAHUN_PEMBELIAN' => '2006-05-09 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2006-05-09 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5410,
                'KODE_ASET' => '1040-3-18-8487-0506',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Brankas',
                'ITEM' => 'Brandkast DS 7 Laci Merk Priority',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Storage/Brankas Room',
                'COST_AC' => 14000000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 8487,
                'TAHUN_PEMBELIAN' => '2006-05-22 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2006-05-22 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5435,
                'KODE_ASET' => '1016-3-18-8745-0706',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Brankas',
                'ITEM' => 'Brankas DS 10 Merk Priority',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Storage/Brankas Room',
                'COST_AC' => 16700000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 8745,
                'TAHUN_PEMBELIAN' => '2006-07-06 00:00:00',
                'POSITION' => 'Back Office Staff',
                'ACQUISITION_DATE' => '2006-07-06 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Febriani Farida'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5591,
                'KODE_ASET' => '1056-3-14-9560-0507',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Phone set/Telepon',
                'ITEM' => 'Box MDF (LSA+BMF+Arrester)',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Server Room',
                'COST_AC' => 500000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 9560,
                'TAHUN_PEMBELIAN' => '2007-05-09 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2007-05-09 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 5630,
                'KODE_ASET' => '1026-3-18-9724-0707',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Brankas',
                'ITEM' => 'Brankas DS 10 Priority',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Storage/Brankas Room',
                'COST_AC' => 16000000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 9724,
                'TAHUN_PEMBELIAN' => '2007-07-17 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2007-07-17 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 6233,
                'KODE_ASET' => '1076-3-16-012281-1108',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'AC (Air Conditioner)',
                'ITEM' => 'Panasonic 3/4 PK',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 2610000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 12281,
                'TAHUN_PEMBELIAN' => '2008-11-07 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2008-11-07 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 7180,
                'KODE_ASET' => '1044-2-3-16845-0818',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Personal Computer',
                'ITEM' => 'Dell Optiplex 3050SFF CTO + Monitor LCD',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 9777152,
                'BOK_VAL' => 2933146,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 16845,
                'TAHUN_PEMBELIAN' => '2018-08-10 00:00:00',
                'POSITION' => 'Field Supervisor (MH, Coll Head, CA, Rec Head dll)',
                'ACQUISITION_DATE' => '2018-08-10 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Octa Tri Setiya Budy'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 7543,
                'KODE_ASET' => '1034-3-28-7479-1205',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Mesin absensi',
                'ITEM' => 'Mesin Absensi Amano EX 3500 N',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 2425000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Mesin Absensi Amano EX 3500 N',
                'NO_INVENTARIS' => 7479,
                'TAHUN_PEMBELIAN' => '2005-12-14 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2005-12-14 00:00:00',
                'LAST_UPDATE' => '2024-01-09 16:37:21',
                'USER_UPDATE' => 'DWI.SOFI',
                'USERNAME' => 'NO USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 7843,
                'KODE_ASET' => '1053-3-28-9149-1106',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Mesin absensi',
                'ITEM' => 'Mesin Absensi Amano Type EX3500N',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Storage/Brankas Room',
                'COST_AC' => 2450000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Mesin Absensi Amano Type EX3500N',
                'NO_INVENTARIS' => 9149,
                'TAHUN_PEMBELIAN' => '2006-11-21 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2006-11-21 00:00:00',
                'LAST_UPDATE' => '2024-02-12 16:51:50',
                'USER_UPDATE' => 'DWI.SOFI',
                'USERNAME' => 'NO USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 7922,
                'KODE_ASET' => '1045-3-28-8890-0806',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Mesin absensi',
                'ITEM' => 'Mesin Absensi Amano EX 3500N',
                'CONDITION' => 'Broken',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 2050000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 8890,
                'TAHUN_PEMBELIAN' => '2006-08-08 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2006-08-08 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 7933,
                'KODE_ASET' => '1056-3-28-9583-0507',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Mesin absensi',
                'ITEM' => 'Mesin Absensi Amano',
                'CONDITION' => 'Broken',
                'LOC_ROOM' => 'Filling Room/Document Room',
                'COST_AC' => 2000000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 9583,
                'TAHUN_PEMBELIAN' => '2007-05-12 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2007-05-12 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 7953,
                'KODE_ASET' => '1058-3-28-9776-0807',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Mesin absensi',
                'ITEM' => 'Mesin Absen Amano',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 2000000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 9776,
                'TAHUN_PEMBELIAN' => '2007-08-06 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2007-08-06 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 8205,
                'KODE_ASET' => '1038-3-25-007549-1205',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'AC (Air Conditioner)',
                'ITEM' => 'AC Split 3/4 PK LG Goldfin LS Q 076 AAG',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Branch Manager Room',
                'COST_AC' => 2511000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 7549,
                'TAHUN_PEMBELIAN' => '2005-12-28 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2005-12-28 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 9241,
                'KODE_ASET' => '1032-3-22-12414-1208',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Kursi',
                'ITEM' => 'Kursi High Point HP-10TG',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Teller Room',
                'COST_AC' => 400000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Kursi HP-10TG',
                'NO_INVENTARIS' => 12414,
                'TAHUN_PEMBELIAN' => '2008-12-15 00:00:00',
                'POSITION' => 'Back Office Staff',
                'ACQUISITION_DATE' => '2008-12-15 00:00:00',
                'LAST_UPDATE' => '2024-02-12 13:35:11',
                'USER_UPDATE' => 'DWI.SOFI',
                'USERNAME' => 'ALL USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 9580,
                'KODE_ASET' => '1012-2-3-11313-0813',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Personal Computer',
                'ITEM' => 'Komputer DELL Optiplex 3010 MT w/LCD 18.5" E1912H',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 7342500,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 11313,
                'TAHUN_PEMBELIAN' => '2013-08-23 00:00:00',
                'POSITION' => 'No Position',
                'ACQUISITION_DATE' => '2013-08-23 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'No User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 10338,
                'KODE_ASET' => '1063-2-3-4259-0214',
                'GROUP' => 'Komputer',
                'SUBGROUP' => 'Personal Computer',
                'ITEM' => 'HP Prodesk',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 7899166.6,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 4259,
                'TAHUN_PEMBELIAN' => '2014-02-22 00:00:00',
                'POSITION' => 'Back Office Staff',
                'ACQUISITION_DATE' => '2014-02-22 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'Joko Adi Saputra'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 11223,
                'KODE_ASET' => '1508-3-21-16515-0318',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Meja',
                'ITEM' => 'Meja Meeting High Point CT 3B 200x75CM(WarNA Beech)',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Meeting Room',
                'COST_AC' => 1706250,
                'BOK_VAL' => 369687,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 16515,
                'TAHUN_PEMBELIAN' => '2018-03-09 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2018-03-09 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'All User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 13193,
                'KODE_ASET' => '1043-3-21-11614-0708',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'Meja',
                'ITEM' => 'Meja HP OD 032',
                'CONDITION' => 'Good',
                'LOC_ROOM' => 'Back Office Room',
                'COST_AC' => 600000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exist',
                'NO_INVENTARIS' => 11614,
                'TAHUN_PEMBELIAN' => '2008-07-16 00:00:00',
                'POSITION' => 'No Position',
                'ACQUISITION_DATE' => '2008-07-16 00:00:00',
                'LAST_UPDATE' => '2021-12-01 00:00:00',
                'USERNAME' => 'No User'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 14210,
                'KODE_ASET' => '1076-3-16-012283-1108',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'AC (Air Conditioner)',
                'ITEM' => 'Panasonic 1 PK',
                'CONDITION' => 'Broken',
                'LOC_ROOM' => 'Branch Manager Room',
                'COST_AC' => 2685000,
                'BOK_VAL' => 0,
                'STATUS' => 'Exists',
                'DESCRIPTION' => 'Panasonic 1 PK',
                'NO_INVENTARIS' => 12283,
                'TAHUN_PEMBELIAN' => '2008-11-07 00:00:00',
                'POSITION' => 'Shared Assets (All Division)',
                'ACQUISITION_DATE' => '2008-11-07 00:00:00',
                'LAST_UPDATE' => '2024-02-07 16:32:59',
                'USER_UPDATE' => 'DWI.SOFI',
                'USERNAME' => 'NO USER'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 14805,
                'NO_RECEIVE' => '1526RCV220616000001',
                'KODE_ASET' => '1526-3-25-0622-000001',
                'GROUP' => 'PERLENGKAPAN',
                'SUBGROUP' => 'Kursi',
                'ITEM' => '10578',
                'MERK' => 'Avery',
                'TYPE' => 'Hight Point AY405K',
                'COST_AC' => 1700000,
                'CREATE_DATE' => '2022-06-16 15:55:49'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 14824,
                'NO_RECEIVE' => '1516RCV221214000001',
                'KODE_ASET' => '1516-3-143-1222-000001',
                'GROUP' => 'PERLENGKAPAN',
                'SUBGROUP' => 'CCTV',
                'ITEM' => '41902',
                'MERK' => 'ALHUA',
                'TYPE' => '-',
                'COST_AC' => 3600000,
                'CREATE_DATE' => '2022-12-14 16:41:56'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 14873,
                'NO_RECEIVE' => '1528RCV230819000002',
                'KODE_ASET' => '1528-3-143-0823-000001',
                'GROUP' => 'PERLENGKAPAN',
                'SUBGROUP' => 'CCTV',
                'ITEM' => '44157',
                'MERK' => 'Dahua',
                'TYPE' => '-',
                'COST_AC' => 2479400,
                'CREATE_DATE' => '2023-08-19 08:20:19'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 24874,
                'NO_RECEIVE' => '1001RCV230906000005',
                'KODE_ASET' => '1001-3-143-0923-000001',
                'GROUP' => 'PERLENGKAPAN',
                'SUBGROUP' => 'CCTV',
                'ITEM' => '54224',
                'MERK' => 'HILOOK',
                'TYPE' => 'CCTV',
                'COST_AC' => 3307100,
                'CREATE_DATE' => '2023-09-06 12:16:31'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 24875,
                'NO_RECEIVE' => '1001RCV230906000005',
                'KODE_ASET' => '1001-3-143-0923-000002',
                'GROUP' => 'PERLENGKAPAN',
                'SUBGROUP' => 'CCTV',
                'ITEM' => '54225',
                'MERK' => 'HILOOK',
                'TYPE' => 'CCTV',
                'COST_AC' => 2837400,
                'CREATE_DATE' => '2023-09-06 12:16:31'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 24887,
                'NO_RECEIVE' => '1001RCV231023000001',
                'KODE_ASET' => '1001-3-143-1023-000001',
                'GROUP' => 'PERLENGKAPAN',
                'SUBGROUP' => 'CCTV',
                'ITEM' => '54225',
                'MERK' => 'HILOOK',
                'TYPE' => 'CCTV',
                'COST_AC' => 2837400,
                'CREATE_DATE' => '2023-10-23 09:14:15'
            ],
            [
                'MS_ASSET_DETAIL_ID' => 24892,
                'KODE_ASET' => '1506-3-25-17948-0223',
                'GROUP' => 'Perlengkapan',
                'SUBGROUP' => 'AC (Air Conditioner)',
                'ITEM' => '1506 AC Panasonic 1 PK',
                'COST_AC' => 4805000,
                'BOK_VAL' => 4164333,
                'NO_INVENTARIS' => 17948,
                'TAHUN_PEMBELIAN' => '2023-02-01 00:00:00',
                'ACQUISITION_DATE' => '2023-02-01 00:00:00',
                'LAST_UPDATE' => '2023-10-31 11:40:09',
                'USER_CREATE' => 'MANUAL',
                'STATUS' => 'Addition',
                'DESCRIPTION' => '1506 AC Panasonic 1 PK'
            ]
        ];

        foreach ($data as $item) {
            // Mapping field yang tidak sesuai
            $mappedData = $this->mapFields($item);
            
            // Handle date fields
            $mappedData = $this->processDateFields($mappedData);
            
            // Handle empty values
            $mappedData = $this->processEmptyValues($mappedData);
            
            // Buat record
            AssetDetail::create($mappedData);
        }
    }

    /**
     * Mapping field yang tidak sesuai antara seeder dan database
     */
    protected function mapFields(array $item): array
    {
        $mapping = [
            'CREATE_DATE' => 'crdt',
            'USER_CREATE' => 'user_create',
            'USER_UPDATE' => 'user_update',
            'LAST_UPDATE' => 'last_update',
            'ACQUISITION_DATE' => 'acquisition_date',
            'TAHUN_PEMBELIAN' => 'tahun_pembelian'
        ];

        $result = [];
        foreach ($item as $key => $value) {
            $newKey = $mapping[$key] ?? $key;
            $result[$newKey] = $value;
        }

        return $result;
    }

    /**
     * Proses field tanggal menjadi format yang benar
     */
    protected function processDateFields(array $item): array
    {
        $dateFields = [
            'crdt',
            'tahun_pembelian', 
            'acquisition_date', 
            'last_update',
            'insurance_start',
            'insurance_end',
            'tgl_tempo_stnk',
            'tgl_tempo_stnk_pajak',
            'tgl_terima',
            'tanggal_pembelian'
        ];
        
        foreach ($dateFields as $field) {
            if (isset($item[$field])) {
                try {
                    // Jika format datetime dengan jam 00:00:00, konversi ke date saja
                    if (str_contains($item[$field], '00:00:00')) {
                        $item[$field] = Carbon::createFromFormat('Y-m-d H:i:s', $item[$field])->format('Y-m-d');
                    } else {
                        $item[$field] = Carbon::parse($item[$field]);
                    }
                } catch (\Exception $e) {
                    $item[$field] = null;
                }
            } else {
                $item[$field] = null;
            }
        }

        return $item;
    }

    /**
     * Proses nilai kosong/null
     */
    protected function processEmptyValues(array $item): array
    {
        foreach ($item as $key => $value) {
            if ($value === 'NULL' || $value === null || $value === '') {
                $item[$key] = null;
            }
            
            // Konversi string '0' ke integer 0 untuk field numerik
            if (in_array($key, ['cost_ac', 'bok_val', 'no_inventaris']) && $value === '0') {
                $item[$key] = 0;
            }
        }

        return $item;
    }
}