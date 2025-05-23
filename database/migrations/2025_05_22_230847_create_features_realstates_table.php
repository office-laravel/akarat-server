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
        Schema::create('features_realstates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('realstate_id')->nullable();
$table->foreignId('feature_id')->nullable();
$table->foreignId('f_category_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features_realstates');
    }
};
