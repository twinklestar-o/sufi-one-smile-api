<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::table('direct_visits', function (Blueprint $table) {
            // kolom baru untuk tipe & tujuan visit
            $table->string('tipe_visit', 50)->after('dealer_code');
            $table->string('tujuan_visit', 100)->after('tipe_visit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('direct_visits', function (Blueprint $table) {
            $table->dropColumn(['tujuan_visit', 'tipe_visit']);
        });
    }
};