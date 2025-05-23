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
        Schema::create('mediastors', function (Blueprint $table) {
            $table->id();
            $table->string('caption')->nullable();
            $table->string('image')->nullable();
            $table->string('folder')->nullable();
            $table->string('type')->nullable();
            $table->integer('sequence')->nullable();
            $table->foreignId('realstate_id')->nullable();
            $table->integer('is_feature')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mediastors');
    }
};
