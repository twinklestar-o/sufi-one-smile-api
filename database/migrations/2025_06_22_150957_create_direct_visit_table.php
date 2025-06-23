<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('direct_visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            // jabatan saya
            $table->string('jabatan_saya', 100);

            // FK ke tabel master
            $table->char('area_code', 2);
            $table->char('branch_code', 4);
            $table->char('product_code', 4);
            $table->string('dealer_code', 15);

            // tanggal
            $table->date('dari_tanggal');
            $table->date('sampai_tanggal');
            $table->date('tanggal_selesai');

            // data visit
            $table->string('nama_pic', 50);
            $table->text('theme_of_discussion')->nullable();
            $table->text('problem')->nullable();
            $table->text('follow_up')->nullable();
            $table->text('description')->nullable();

            // foto
            $table->string('photo1_path', 255);
            $table->string('photo2_path', 255);

            // lokasi
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();

            $table->timestamps();

            // ===========
            // Foreign Keys
            // ===========
            $table->foreign('area_code')
                  ->references('code')->on('areas')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            $table->foreign('branch_code')
                  ->references('code')->on('branches')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            $table->foreign('product_code')
                  ->references('code')->on('products')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            $table->foreign('dealer_code')
                  ->references('code')->on('dealers')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('direct_visits', function (Blueprint $table) {
            // drop FK terlebih dahulu
            $table->dropForeign(['area_code']);
            $table->dropForeign(['branch_code']);
            $table->dropForeign(['product_code']);
            $table->dropForeign(['dealer_code']);
        });
        Schema::dropIfExists('direct_visits');
    }
};