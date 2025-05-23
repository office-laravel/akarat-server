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
        Schema::create('packages_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
$table->foreignId('package_id')->nullable();
$table->integer('total_reals_count')->nullable();
$table->integer('used_reals_count')->nullable();
$table->integer('remain_reals_count')->nullable();
$table->string('name')->nullable();
$table->string('code')->nullable();
$table->decimal('price')->nullable();
$table->integer('is_special')->nullable();
$table->integer('is_free')->nullable();
$table->integer('duration')->nullable();
$table->dateTime('expire_date')->nullable();
$table->dateTime('start_date')->nullable();
$table->foreignId('duration_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages_users');
    }
};
