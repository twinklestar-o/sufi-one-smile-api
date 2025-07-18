<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DirectVisit;
use Carbon\Carbon;

return new class extends Migration
{
    public function up(): void
    {
        // Step 1: Tambahkan kolom trx_no tanpa constraint unique dulu
        Schema::table('direct_visits', function (Blueprint $table) {
            $table->string('trx_no', 50)->nullable()->after('id');
        });

        // Step 2: Generate trx_no untuk data yang sudah ada
        $this->generateTrxNoForExistingData();

        // Step 3: Ubah kolom menjadi NOT NULL dan tambahkan unique constraint
        Schema::table('direct_visits', function (Blueprint $table) {
            $table->string('trx_no', 50)->nullable(false)->unique()->change();
        });
    }

    public function down(): void
    {
        Schema::table('direct_visits', function (Blueprint $table) {
            $table->dropColumn('trx_no');
        });
    }

    /**
     * Generate trx_no untuk data yang sudah ada
     */
    private function generateTrxNoForExistingData()
    {
        $directVisits = DirectVisit::whereNull('trx_no')->orWhere('trx_no', '')->get();
        
        foreach ($directVisits as $visit) {
            // Gunakan tanggal created_at untuk generate trx_no
            $date = $visit->created_at ?? Carbon::now();
            $day = $date->format('d');
            $month = $date->format('m');
            $year = $date->format('Y');
            
            // Cari nomor urut terakhir untuk hari tersebut
            $lastTrx = DirectVisit::where('trx_no', 'like', "DRV/{$day}/{$month}/{$year}/%")
                          ->where('id', '!=', $visit->id) // Exclude current record
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
            
            $trxNo = "DRV/{$day}/{$month}/{$year}/{$sequenceFormatted}";
            
            // Update tanpa trigger model events
            DirectVisit::where('id', $visit->id)->update(['trx_no' => $trxNo]);
        }
    }
};