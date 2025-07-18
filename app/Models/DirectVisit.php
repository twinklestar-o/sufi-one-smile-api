<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DirectVisit extends Model
{
    protected $fillable = [
        'trx_no', // Tambahkan ini
        'jabatan_saya',
        'area_code',
        'branch_code',
        'product_code',
        'dealer_code',
        'tipe_visit',
        'tujuan_visit',
        'dari_tanggal',
        'sampai_tanggal',
        'tanggal_selesai',
        'nama_pic',
        'theme_of_discussion',
        'problem',
        'follow_up',
        'description',
        'photo1_path',
        'photo2_path',
        'latitude',
        'longitude',
        'userid',
        'status',
    ];

    public function mainPersons()
    {
        return $this->hasMany(DirectVisitMainPerson::class, 'direct_visit_id');
    }

    /**
     * Generate nomor transaksi otomatis
     * Format: DRV/DD/MM/YYYY/XXXXXX
     */
    public static function generateTrxNo()
    {
        $now = Carbon::now();
        $day = $now->format('d');
        $month = $now->format('m');
        $year = $now->format('Y');
        // Cari nomor urut terakhir untuk bulan ini
        $lastTrx = self::where('trx_no', 'like', "DRV/{$day}/{$month}/{$year}/%")
                      ->orderBy('trx_no', 'desc')
                      ->first();
        $sequence = 1;
        if ($lastTrx) {
            // Ambil 6 digit terakhir dari trx_no dan tambah 1
            $lastSequence = (int) substr($lastTrx->trx_no, -6);
            $sequence = $lastSequence + 1;
        }
        // Format sequence menjadi 6 digit dengan leading zero
        $sequenceFormatted = str_pad($sequence, 6, '0', STR_PAD_LEFT);
        return "DRV/{$day}/{$month}/{$year}/{$sequenceFormatted}";
    }

    /**
     * Boot method untuk auto-generate trx_no saat creating
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->trx_no)) {
                $model->trx_no = self::generateTrxNo();
            }
        });
    }
}