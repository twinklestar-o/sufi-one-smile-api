// database/migrations/2023_12_01_create_ms_asset_branches_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ms_asset_branches', function (Blueprint $table) {
            $table->id('ms_asset_branch_id');
            $table->string('kode_aset', 50);
            $table->string('branch_id');
            $table->string('lokasi');
            $table->boolean('is_active')->default(true);
            $table->string('user_create');
            $table->timestamp('create_date');
            $table->string('division');
            $table->string('personal_loc');
            $table->string('dept')->nullable();
            $table->string('room')->nullable();
            $table->string('floor');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('location')->nullable();
            $table->string('lelang')->nullable();
            $table->string('writeoff')->nullable();
            $table->string('mutation')->nullable();
            $table->string('borrow')->nullable();
            $table->string('return')->nullable();
            $table->string('move')->nullable();
            $table->string('maintan')->nullable();
            $table->string('klasifikasi_wo')->nullable();
            $table->text('remark_wo')->nullable();
            $table->string('user_update_wo')->nullable();
            $table->timestamp('date_update_wo')->nullable();
            $table->timestamp('last_update')->nullable();
            $table->string('user_update')->nullable();
            $table->string('branch_type')->nullable();
            $table->string('branch_name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_asset_branches');
    }
};