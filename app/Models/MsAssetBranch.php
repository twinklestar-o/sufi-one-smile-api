<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsAssetBranch extends Model
{
    use HasFactory;

    protected $table = 'ms_asset_branches';
    protected $primaryKey = 'ms_asset_branch_id';
    protected $guarded = [];
    protected $casts = [
        'create_date' => 'datetime',
        'date_update_wo' => 'datetime',
        'last_update' => 'datetime',
    ];

    public function assetDetail()
    {
        return $this->belongsTo(AssetDetail::class, 'kode_aset', 'kode_aset');
    }
}