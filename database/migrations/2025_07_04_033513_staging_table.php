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
        Schema::create('staging_table', function (Blueprint $table) {
            $table->id();
            $table->string('branch');
            $table->string('trx_no');
            $table->string('kode_asset');
            $table->decimal('cost', 15, 2)->nullable();
            $table->decimal('book_value', 15, 2)->nullable();
            $table->string('status')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('username')->nullable();
            $table->string('posisi')->nullable();
            $table->string('divisi')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('lantai')->nullable();
            $table->string('remark')->nullable();
            $table->string('uscrt');
            $table->timestamp('crdt');
            $table->timestamp('updt_dt');
            $table->string('updt_usr');
            $table->date('period');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staging_table');
    }
};
