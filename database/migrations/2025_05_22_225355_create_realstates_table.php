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
        Schema::create('realstates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_user_id')->nullable();
$table->string('dep')->nullable();
$table->string('purpose')->nullable();
$table->string('saleType')->nullable();
$table->string('rentDuration')->nullable();
$table->string('type')->nullable();
$table->string('residence')->nullable();
$table->foreignId('residence_id')->nullable();
$table->string('trade')->nullable();
$table->foreignId('trade_id')->nullable();
$table->string('rooms')->nullable();
$table->foreignId('room_id')->nullable();
$table->string('baths')->nullable();
$table->foreignId('bath_id')->nullable();
$table->string('price')->nullable();
$table->string('prePay')->nullable();
$table->decimal('area')->nullable();
$table->string('projDeliverdate')->nullable();
$table->foreignId('projDeliverdates_id')->nullable();
$table->integer('projDeliverplan')->nullable();
$table->string('projProceedPercent')->nullable();
$table->string('projProceedPercent_id')->nullable();
$table->string('projType')->nullable();
$table->string('projResidence')->nullable();
$table->foreignId('projResidence_id')->nullable();
$table->string('projTrade')->nullable();
$table->foreignId('projTrade_id')->nullable();
$table->string('latitude')->nullable();
$table->string('longitude')->nullable();
$table->foreignId('user_id')->nullable();
$table->foreignId('city_id')->nullable();
$table->foreignId('subcity_id')->nullable();
$table->foreignId('district_id')->nullable();
$table->string('furnishStatus')->nullable();
$table->text('description')->nullable();
$table->string('report_number')->nullable();
$table->string('realstate_code')->nullable();
$table->integer('is_special')->nullable();
$table->string('status')->nullable();
$table->string('slug')->nullable();
$table->text('keywords')->nullable();
$table->string('RealOwnership')->nullable();
$table->foreignId('RealOwnership_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realstates');
    }
};
