<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ms_img_stokopname_nonkendaraan', function (Blueprint $table) {
            $table->id(); // bigint primary key auto-increment
            $table->string('no_stokopname', 50)->nullable();
            $table->binary('img')->nullable(); // varbinary setara binary di Laravel
            $table->integer('seq')->default(1)->nullable();
            $table->string('name', 50)->nullable();
            $table->timestamps(); // opsional, bisa hapus kalau tidak dibutuhkan
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ms_img_stokopname_nonkendaraan');
    }
};