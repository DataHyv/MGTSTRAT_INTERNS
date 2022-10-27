<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateCastilloLeoLpcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('castillo_leo_lpc', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('castillo_leo_lpc', function (Blueprint $table) {
            $table->id();
        
            $table->string('payment_date', 50)->nullable($value = true);
            $table->string('engagement')->nullable($value = true);
            $table->string('contract_fee')->nullable($value = true);
            $table->string('vat')->nullable($value = true);
            $table->string('ewt')->nullable($value = true);
            $table->string('vat_exempt_sales')->nullable($value = true);
            $table->string('total_amount_deposited')->nullable($value = true);
            $table->string('role', 50)->nullable($value = true);
            $table->boolean('paid')->nullable($value = true);
            $table->string('comm_ref')->nullable($value = true);
            $table->string('or_no')->nullable($value = true);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('castillo_leo_lpc');
    }
}


