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
        Schema::create('direct_visit_main_persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('direct_visit_id');
            $table->string('jabatan', 50);
            $table->string('nama_pic', 50);
            $table->string('telp_pic', 20);
            $table->timestamps();

            // FK ke direct_visits
            $table->foreign('direct_visit_id')
                  ->references('id')->on('direct_visits')
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('direct_visit_main_persons', function (Blueprint $table) {
            $table->dropForeign(['direct_visit_id']);
        });
        Schema::dropIfExists('direct_visit_main_persons');
    }
};