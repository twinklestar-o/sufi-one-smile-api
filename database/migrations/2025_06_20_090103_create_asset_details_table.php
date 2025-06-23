// database/migrations/2023_12_01_create_ms_asset_details_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ms_asset_details', function (Blueprint $table) {
            $table->id('ms_asset_detail_id');
            $table->string('no_receive')->nullable();
            $table->string('kode_aset', 50)->unique();
            $table->string('group');
            $table->string('subgroup');
            $table->string('item');
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->string('no_rangka')->nullable();
            $table->string('no_mesin')->nullable();
            $table->string('no_bpkb')->nullable();
            $table->string('no_faktur')->nullable();
            $table->string('nopol')->nullable();
            $table->string('no_stnk')->nullable();
            $table->timestamp('crdt')->nullable();
            $table->string('user_create')->nullable();
            $table->string('status')->nullable();
            $table->text('description')->nullable();
            $table->decimal('cost_ac', 15, 2)->nullable();
            $table->decimal('bok_val', 15, 2)->default(0);
            $table->string('condition')->nullable();
            $table->string('loc_room')->nullable();
            $table->string('det_inf_upd')->nullable();
            $table->text('add_remark')->nullable();
            $table->string('bpkb_status')->nullable();
            $table->text('aset_desc')->nullable();
            $table->string('tahun')->nullable();
            $table->string('color')->nullable();
            $table->string('username')->nullable();
            $table->string('no_register_bpkb')->nullable();
            $table->date('tgl_tempo_stnk')->nullable();
            $table->date('tgl_tempo_stnk_pajak')->nullable();
            $table->string('no_inventaris')->nullable();
            $table->string('no_accounting')->nullable();
            $table->string('tahun_pembelian')->nullable();
            $table->string('serial_number_software')->nullable();
            $table->string('serial_number_hardware')->nullable();
            $table->date('tanggal_pembelian')->nullable();
            $table->string('position')->nullable();
            $table->date('acquisition_date')->nullable();
            $table->string('asset_use')->nullable();
            $table->string('employee_job')->nullable();
            $table->string('bpkb_owner')->nullable();
            $table->string('trx')->nullable();
            $table->date('insurance_start')->nullable();
            $table->date('insurance_end')->nullable();
            $table->decimal('basic_rate_ojk_for_tlo', 15, 2)->nullable();
            $table->decimal('sum_insured_total', 15, 2)->nullable();
            $table->decimal('gross_premium_total', 15, 2)->nullable();
            $table->decimal('additional_discount_insurance_company', 15, 2)->nullable();
            $table->decimal('premium_after_additional_discount', 15, 2)->nullable();
            $table->decimal('ojk_discount', 15, 2)->nullable();
            $table->decimal('net_premium_grand_total', 15, 2)->nullable();
            $table->string('number_of_insurance_polis')->nullable();
            $table->string('period_of_polis')->nullable();
            $table->string('insurance_company')->nullable();
            $table->string('certificate_number')->nullable();
            $table->timestamp('last_update')->nullable();
            $table->string('user_update')->nullable();
            $table->string('validation')->nullable();
            $table->date('tgl_terima')->nullable();
            $table->string('daily_user')->nullable();
            $table->string('no_tiket')->nullable();
            $table->string('username_status')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_asset_details');
    }
};