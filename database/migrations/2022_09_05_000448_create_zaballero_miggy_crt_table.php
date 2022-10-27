<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateZaballeroMiggyCrtTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('zaballero_miggy_crt', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('zaballero_miggy_crt', function (Blueprint $table) {
            $table->id();
        
            $table->string('engagement_date', 50)->nullable($value = true);
            $table->string('or_no')->nullable($value = true);
            $table->string('engagement')->nullable($value = true);
            $table->string('contract_fee')->nullable($value = true);
            $table->string('tax_withheld')->nullable($value = true);
            $table->string('total_amount_deposited')->nullable($value = true);
            $table->string('date_deposited')->nullable($value = true);
            $table->string('role_1', 50)->nullable($value = true);
            $table->string('role_2', 50)->nullable($value = true);
            $table->string('role_3', 50)->nullable($value = true);
            $table->string('others', 50)->nullable($value = true);
            $table->string('undifined_column')->nullable($value = true);
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zaballero_miggy_crt');
    }
}



