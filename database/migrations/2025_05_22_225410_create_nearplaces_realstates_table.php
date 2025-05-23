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
        Schema::create('nearplaces_realstates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('realstate_id')->nullable();
$table->foreignId('near_place_id')->nullable();
$table->string('longitude')->nullable();
$table->string('latitude')->nullable();
$table->string('name')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nearplaces_realstates');
    }
};
