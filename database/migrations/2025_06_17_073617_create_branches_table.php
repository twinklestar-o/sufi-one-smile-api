<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
public function up()
{
    if (!Schema::hasTable('branches')) {
        Schema::create('branches', function (Blueprint $table) {
            $table->char('code', 20)->primary();
            $table->char('area_code', 20)->nullable(); 
            $table->string('name', 150);
            $table->timestamps();

            $table->foreign('area_code')->references('code')->on('areas')->onDelete('cascade');
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};