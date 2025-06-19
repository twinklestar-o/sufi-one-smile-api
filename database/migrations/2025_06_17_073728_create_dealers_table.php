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
    if (! Schema::hasTable('dealers')) {
       Schema::create('dealers', function (Blueprint $table) {
        $table->char('code',6)->primary();
        $table->string('name',200);
        $table->timestamps();
    });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealers');
    }
};