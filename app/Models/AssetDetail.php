<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'ms_asset_detail_id';
    protected $table = 'ms_asset_details';

    protected $fillable = [
        'no_receive',
        'kode_aset',
        'group',
        'subgroup',
        'item',
        'merk',
        'type',
        'no_rangka',
        'no_mesin',
        'no_bpkb',
        'no_faktur',
        'nopol',
        'no_stnk',
        'crdt',
        'user_create',
        'status',
        'description',
        'cost_ac',
        'bok_val',
        'condition',
        'loc_room',
        'det_inf_upd',
        'add_remark',
        'bpkb_status',
        'aset_desc',
        'tahun',
        'color',
        'username',
        'no_register_bpkb',
        'tgl_tempo_stnk',
        'tgl_tempo_stnk_pajak',
        'no_inventaris',
        'no_accounting',
        'tahun_pembelian',
        'serial_number_software',
        'serial_number_hardware',
        'tanggal_pembelian',
        'position',
        'acquisition_date',
        'asset_use',
        'employee_job',
        'bpkb_owner',
        'trx',
        'insurance_start',
        'insurance_end',
        'basic_rate_ojk_for_tlo',
        'sum_insured_total',
        'gross_premium_total',
        'additional_discount_insurance_company',
        'premium_after_additional_discount',
        'ojk_discount',
        'net_premium_grand_total',
        'number_of_insurance_polis',
        'period_of_polis',
        'insurance_company',
        'certificate_number',
        'last_update',
        'user_update',
        'validation',
        'tgl_terima',
        'daily_user',
        'no_tiket',
        'username_status'
    ];

    protected $casts = [
        'crdt' => 'datetime',
        'tanggal_pembelian' => 'date',
        'acquisition_date' => 'date',
        'insurance_start' => 'date',
        'insurance_end' => 'date',
        'tgl_tempo_stnk' => 'date',
        'tgl_tempo_stnk_pajak' => 'date',
        'tgl_terima' => 'date',
        'last_update' => 'datetime',
        'cost_ac' => 'decimal:2',
        'bok_val' => 'decimal:2',
        'basic_rate_ojk_for_tlo' => 'decimal:2',
        'sum_insured_total' => 'decimal:2',
        'gross_premium_total' => 'decimal:2',
        'additional_discount_insurance_company' => 'decimal:2',
        'premium_after_additional_discount' => 'decimal:2',
        'ojk_discount' => 'decimal:2',
        'net_premium_grand_total' => 'decimal:2',
    ];
}