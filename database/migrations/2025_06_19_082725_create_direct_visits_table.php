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
       Schema::create('direct_visits', function (Blueprint $table) {
  $table->bigIncrements('id');
  $table->string('jabatan_saya',100);
  $table->char('area_code',2);
  $table->char('branch_code',4);
  $table->char('product_code',4);
  $table->string('dealer_code',20);
  $table->date('dari_tanggal');
  $table->date('sampai_tanggal');
  $table->date('tanggal_selesai');
  $table->string('nama_pic',50);
  $table->text('theme_of_discussion')->nullable();
  $table->text('problem')->nullable();
  $table->text('follow_up')->nullable();
  $table->text('description')->nullable();
  $table->string('photo1_path');
  $table->string('photo2_path');
  $table->decimal('latitude',10,6)->nullable();
  $table->decimal('longitude',10,6)->nullable();
  $table->timestamps();

  $table->foreign('area_code')   ->references('code')->on('areas');
  $table->foreign('branch_code') ->references('code')->on('branches');
  $table->foreign('product_code')->references('code')->on('products');
  $table->foreign('dealer_code') ->references('code')->on('dealers');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_visits');
    }
};