<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MsAssetBranch;
use Carbon\Carbon;

class MsAssetBranchSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'MS_ASSET_BRANCH_ID' => 529,
                'KODE_ASET' => '1018-2-3-172-0804',
                'BRANCH_ID' => '1018',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'No Division/Directorat',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 4023,
                'KODE_ASET' => '1058-3-22-9760-0807',
                'BRANCH_ID' => '1058',
                'LOKASI' => 'Lobby',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'HRD & GA',
                'PERSONAL_LOC' => 'Lobby',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 4029,
                'KODE_ASET' => '1058-3-21-9766-0807',
                'BRANCH_ID' => '1058',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 2586,
                'KODE_ASET' => '1077-2-3-3363-1013',
                'BRANCH_ID' => '1077',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Collection 2W',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 4519,
                'KODE_ASET' => '1047-3-22-009778-0807',
                'BRANCH_ID' => '1047',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1818,
                'KODE_ASET' => '1000-3-22-10282-1107',
                'BRANCH_ID' => '1000',
                'LOKASI' => '0',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Lost',
                'PERSONAL_LOC' => 'Lost',
                'FLOOR' => 'Lost'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 2960,
                'KODE_ASET' => '1065-2-7-1379-0208',
                'BRANCH_ID' => '1065',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Divisi Internal Audit & Kontrol',
                'PERSONAL_LOC' => 'Back Office Room',
                'DEPT' => 'Back Office Room',
                'FLOOR' => '1 (FIRST) FLOOR',
                'LOCATION' => 'Back Office Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 2921,
                'KODE_ASET' => '1000-3-21-12997-0809',
                'BRANCH_ID' => '1000',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'No Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (SECOND) FLOOR',
                'LOCATION' => 'Back Office Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 2021,
                'KODE_ASET' => '1040-3-22-13273-0909',
                'BRANCH_ID' => '1040',
                'LOKASI' => 'Lobby',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Lobby',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 405,
                'KODE_ASET' => '1068-3-20-13666-0810',
                'BRANCH_ID' => '1068',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 7854,
                'KODE_ASET' => '1006-3-20-13736-1010',
                'BRANCH_ID' => '1006',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5897,
                'KODE_ASET' => '1026-3-20-7064-1005',
                'BRANCH_ID' => '1026',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1325,
                'KODE_ASET' => '1000-2-7-3354-1013',
                'BRANCH_ID' => '1000',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Divisi Information Technology',
                'PERSONAL_LOC' => 'Back Office Room',
                'DEPT' => 'Back Office Room',
                'FLOOR' => '2 (SECOND) FLOOR',
                'LOCATION' => 'Back Office Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 4457,
                'KODE_ASET' => '1058-3-20-13771-1110',
                'BRANCH_ID' => '1058',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 415,
                'KODE_ASET' => '1068-3-20-13871-0111',
                'BRANCH_ID' => '1068',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1417,
                'KODE_ASET' => '1000-3-14-5324-1202',
                'BRANCH_ID' => '1000',
                'LOKASI' => '0',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Lost',
                'PERSONAL_LOC' => 'Lost',
                'FLOOR' => 'Lost'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 2345,
                'KODE_ASET' => '1076-2-7-1791-0109',
                'BRANCH_ID' => '1076',
                'LOKASI' => 'Server Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Server Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 924,
                'KODE_ASET' => '1078-2-7-1843-0109',
                'BRANCH_ID' => '1078',
                'LOKASI' => 'Server Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Server Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 835,
                'KODE_ASET' => '1060-3-14-7574-0106',
                'BRANCH_ID' => '1060',
                'LOKASI' => 'Warehouse Room/ADP Room',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Warehouse Room/ADP Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1585,
                'KODE_ASET' => '1038-3-14-7583-0106',
                'BRANCH_ID' => '1038',
                'LOKASI' => 'Server Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Server Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 7361,
                'KODE_ASET' => '1000-2-7-16234-1217',
                'BRANCH_ID' => '1000',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Divisi Information Technology',
                'PERSONAL_LOC' => 'Back Office Room',
                'DEPT' => 'Back Office Room',
                'FLOOR' => '1 (FIRST) FLOOR',
                'LOCATION' => 'Back Office Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 3388,
                'KODE_ASET' => '1000-3-14-16483-0318',
                'BRANCH_ID' => '1000',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Collection 2W & 4W',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5697,
                'KODE_ASET' => '1087-3-21-16753-0807',
                'BRANCH_ID' => '1087',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Operation Cabang',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (SECOND) FLOOR',
                'LOCATION' => 'Back Office Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5813,
                'KODE_ASET' => '1032-3-18-8293-0206',
                'BRANCH_ID' => '1032',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '1 (FIRST) FLOOR',
                'LOCATION' => 'Storage/Brankas Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1381,
                'KODE_ASET' => '1017-3-18-8475-0506',
                'BRANCH_ID' => '1017',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1986,
                'KODE_ASET' => '1040-3-18-8487-0506',
                'BRANCH_ID' => '1040',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1291,
                'KODE_ASET' => '1016-3-18-8745-0706',
                'BRANCH_ID' => '1016',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Operation',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5732,
                'KODE_ASET' => '1056-3-14-9560-0507',
                'BRANCH_ID' => '1056',
                'LOKASI' => 'Server Room',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Server Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5926,
                'KODE_ASET' => '1026-3-18-9724-0707',
                'BRANCH_ID' => '1026',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 2434,
                'KODE_ASET' => '1076-3-16-012281-1108',
                'BRANCH_ID' => '1076',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '3 (Third) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1704,
                'KODE_ASET' => '1044-2-3-16845-0818',
                'BRANCH_ID' => '1044',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Collection 2W',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 6771,
                'KODE_ASET' => '1034-3-28-7479-1205',
                'BRANCH_ID' => '1034',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'No Division',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '1 (FIRST) FLOOR',
                'LOCATION' => 'Storage/Brankas Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 457,
                'KODE_ASET' => '1053-3-28-9149-1106',
                'BRANCH_ID' => '1053',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'No Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '1 (FIRST) FLOOR',
                'LOCATION' => 'Back Office Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 6288,
                'KODE_ASET' => '1045-3-28-8890-0806',
                'BRANCH_ID' => '1045',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5751,
                'KODE_ASET' => '1056-3-28-9583-0507',
                'BRANCH_ID' => '1056',
                'LOKASI' => 'Filling Room/Document Room',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Filling Room/Document Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 4039,
                'KODE_ASET' => '1058-3-28-9776-0807',
                'BRANCH_ID' => '1058',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 0,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1576,
                'KODE_ASET' => '1038-3-25-007549-1205',
                'BRANCH_ID' => '1038',
                'LOKASI' => 'Branch Manager Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Branch Manager Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5943,
                'KODE_ASET' => '1032-3-22-12414-1208',
                'BRANCH_ID' => '1032',
                'LOKASI' => 'Meeting Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Meeting Room',
                'FLOOR' => '2 (SECOND) FLOOR',
                'LOCATION' => 'Meeting Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 3810,
                'KODE_ASET' => '1012-2-3-11313-0813',
                'BRANCH_ID' => '1012',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'No Division/Directorat',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 5327,
                'KODE_ASET' => '1063-2-3-4259-0214',
                'BRANCH_ID' => '1063',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'Collection 2W',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 1240,
                'KODE_ASET' => '1508-3-21-16515-0318',
                'BRANCH_ID' => '1508',
                'LOKASI' => 'Meeting Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'All Division',
                'PERSONAL_LOC' => 'Meeting Room',
                'FLOOR' => '1 (First) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 495,
                'KODE_ASET' => '1043-3-21-11614-0708',
                'BRANCH_ID' => '1043',
                'LOKASI' => 'Back Office Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'No Division/Directorat',
                'PERSONAL_LOC' => 'Back Office Room',
                'FLOOR' => '2 (Second) Floor'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 2436,
                'KODE_ASET' => '1076-3-16-012283-1108',
                'BRANCH_ID' => '1076',
                'LOKASI' => 'Storage/Brankas Room',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'Import Tori',
                'CREATE_DATE' => '2022-03-21 09:30:13.247',
                'DIVISION' => 'No Division',
                'PERSONAL_LOC' => 'Storage/Brankas Room',
                'FLOOR' => '1 (FIRST) FLOOR',
                'LOCATION' => 'Storage/Brankas Room'
            ],
            [
                'MS_ASSET_BRANCH_ID' => 14805,
                'KODE_ASET' => '1526-3-25-0622-000001',
                'BRANCH_ID' => '1526',
                'LOKASI' => '-',
                'IS_ACTIVE' => 1,
                'USER_CREATE' => 'RACHMA.DWI',
                'CREATE_DATE' => '2022-06-16 15:55:49.070',
                'DIVISION' => 'No Division',
                'PERSONAL_LOC' => '-',
                'FLOOR' => '-',
                'LOCATION' => '-'
            ]
            // [
            //     'MS_ASSET_BRANCH_ID' => 14823,
            //     'KODE_ASET' => '1516-3-143-1222-000001',
            //     'BRANCH_ID' => '1516',
            //     'LOKASI' => '-',
            //     'IS_ACTIVE' => 1,
            //     'USER_CREATE' => 'KAMILLAH.RAHMI',
            //     'CREATE_DATE' => '2022-12-14 16:41:56.193',
            //     'DIVISION' => 'JABODETABEKSER',
            //     'DEPT' => 'SERANG'
            // ],
            // [
            //     'MS_ASSET_BRANCH_ID' => 14872,
            //     'KODE_ASET' => '1528-3-143-0823-000001',
            //     'BRANCH_ID' => '1528',
            //     'IS_ACTIVE' => 1,
            //     'USER_CREATE' => 'RIA.FITRIANA',
            //     'CREATE_DATE' => '2023-08-19 08:20:19.547',
            //     'DIVISION' => 'JABAR',
            //     'DEPT' => 'CIREBON'
            // ],
            // [
            //     'MS_ASSET_BRANCH_ID' => 24873,
            //     'KODE_ASET' => '1001-3-143-0923-000001',
            //     'BRANCH_ID' => '1001',
            //     'IS_ACTIVE' => 1,
            //     'USER_CREATE' => 'SHINTA',
            //     'CREATE_DATE' => '2023-09-06 12:16:31.057',
            //     'DIVISION' => 'KALIMANTAN',
            //     'DEPT' => 'BANJARMASIN'
            // ],
            // [
            //     'MS_ASSET_BRANCH_ID' => 24874,
            //     'KODE_ASET' => '1001-3-143-0923-000002',
            //     'BRANCH_ID' => '1001',
            //     'IS_ACTIVE' => 1,
            //     'USER_CREATE' => 'SHINTA',
            //     'CREATE_DATE' => '2023-09-06 12:16:31.133',
            //     'DIVISION' => 'KALIMANTAN',
            //     'DEPT' => 'BANJARMASIN'
            // ],
            // [
            //     'MS_ASSET_BRANCH_ID' => 24886,
            //     'KODE_ASET' => '1001-3-143-1023-000001',
            //     'BRANCH_ID' => '1001',
            //     'IS_ACTIVE' => 1,
            //     'USER_CREATE' => 'SHINTA',
            //     'CREATE_DATE' => '2023-10-23 09:14:15.253',
            //     'DIVISION' => 'KALIMANTAN',
            //     'DEPT' => 'BANJARMASIN'
            // ],
            // [
            //     'MS_ASSET_BRANCH_ID' => 24895,
            //     'KODE_ASET' => '1506-3-25-17948-0223',
            //     'BRANCH_ID' => '1506',
            //     'LOKASI' => '0',
            //     'IS_ACTIVE' => 1,
            //     'USER_CREATE' => 'MANUAL',
            //     'CREATE_DATE' => '2023-10-31 11:42:09.533'
            // ]
        ];

        foreach ($data as $item) {
            // Convert date strings to Carbon instances
            $dateFields = ['CREATE_DATE', 'DATE_UPDATE_WO', 'LAST_UPDATE'];
            
            foreach ($dateFields as $field) {
                if (isset($item[$field]) && $item[$field]) {
                    try {
                        $item[$field] = Carbon::parse($item[$field]);
                    } catch (\Exception $e) {
                        $item[$field] = null;
                    }
                } else {
                    $item[$field] = null;
                }
            }

            // Handle empty values
            foreach ($item as $key => $value) {
                if ($value === 'NULL' || $value === null || $value === '') {
                    $item[$key] = null;
                }
            }

            MsAssetBranch::create($item);
        }
    }
}