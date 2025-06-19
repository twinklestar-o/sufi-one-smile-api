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
       Schema::create('branches', function (Blueprint $table) {
  $table->char('code',4)->primary();
  $table->char('area_code',2);
  $table->string('name',100);
  $table->timestamps();
  $table->foreign('area_code')->references('code')->on('areas');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};