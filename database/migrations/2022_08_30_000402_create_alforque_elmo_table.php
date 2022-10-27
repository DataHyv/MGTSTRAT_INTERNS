<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateAlforqueElmoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('alforque_elmo', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('alforque_elmo', function (Blueprint $table) {
            $table->id();
            $table->string('payment_date', 50)->nullable();
            $table->string('engagement', 200)->nullable();
            $table->string('contract_fee')->nullable();
            $table->string('ewt')->nullable();
            $table->string('total_amount_deposited')->nullable();
            $table->string('remarks', 20)->nullable();
            $table->boolean('paid')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alforque_elmo');
    }
}


