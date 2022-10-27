<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateCastroIcarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('castro_icar', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('castro_icar', function (Blueprint $table) {
            $table->id();
        
            $table->string('payment_date', 50)->nullable($value = true);
            $table->string('engagement')->nullable($value = true);
            $table->string('contract_fee')->nullable($value = true);
            $table->string('ewt')->nullable($value = true);
            $table->string('vat_exempt_sales')->nullable($value = true);
            $table->string('total_amount_deposited')->nullable($value = true);
            $table->string('role', 50)->nullable($value = true);
            $table->boolean('paid')->nullable($value = true);
            $table->string('or')->nullable($value = true);
            $table->string('sendImage_of_receipt_to_mgtstrat')->nullable($value = true);
            $table->string('received', 20)->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('castro_icar');
    }
}


