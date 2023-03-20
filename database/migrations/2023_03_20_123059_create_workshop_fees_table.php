<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('workshop_id');
            $table->string('status')->nullable();
            $table->string('customizationFee_packageFees')->nullable();
            $table->string('customizationFee_sessions')->nullable();
            $table->string('customizationFee_nightShift_weekendsHolidays')->nullable();
            $table->string('customizationFee_notes')->nullable();
            $table->string('customizationFeeSubtotal_notes')->nullable();
            $table->string('package1_packageFees')->nullable();
            $table->string('package1_sessions')->nullable();
            $table->string('package1_nightShift_weekendsHolidays')->nullable();
            $table->string('package1_notes')->nullable();
            $table->string('package2_packageFees')->nullable();
            $table->string('package2_sessions')->nullable();
            $table->string('package2_nightShift_weekendsHolidays')->nullable();
            $table->string('package2_notes')->nullable();
            $table->string('producer_packageFees')->nullable();
            $table->string('producer_sessions')->nullable();
            $table->string('producer_nightShift_weekendsHolidays')->nullable();
            $table->string('producer_notes')->nullable();
            $table->string('programSubtotal_notes')->nullable();
            $table->string('totalStandardFees_notes')->nullable();
            $table->string('discount_given')->nullable();
            $table->string('discount_notes')->nullable();
            $table->string('totalPackage')->nullable();
            $table->string('totalPackage_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_fees');
    }
}
