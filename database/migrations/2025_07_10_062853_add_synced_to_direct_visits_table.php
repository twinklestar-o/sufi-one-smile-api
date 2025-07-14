<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('direct_visits', function (Blueprint $table) {
            // tambahkan kolom synced setelah updated_at
            $table->boolean('synced')
                  ->default(false)
                  ->after('updated_at');
        });
    }

    public function down(): void
    {
        Schema::table('direct_visits', function (Blueprint $table) {
            $table->dropColumn('synced');
        });
    }
};