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
        Schema::create('durations_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('duration_id')->nullable();
$table->foreignId('package_id')->nullable();
$table->string('status')->nullable();
$table->decimal('price')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('durations_packages');
    }
};
