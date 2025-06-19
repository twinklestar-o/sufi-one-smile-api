<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


// database/migrations/2025_06_17_073528_create_areas_table.php
public function up()
{
    if (! Schema::hasTable('products')) {
         Schema::create('products', function (Blueprint $table) {
        $table->char('code',20)->primary();
        $table->string('name',50);
        $table->timestamps();
    });
    }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};