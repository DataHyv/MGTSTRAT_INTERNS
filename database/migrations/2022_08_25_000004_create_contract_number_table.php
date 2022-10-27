<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 SALES REPORT

class CreateContractNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('contract_number', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('contract_number', function (Blueprint $table) {
            $table->id();
            $table->string('sales_person', 50)->nullable($value = true);
            $table->string('proposal_date', 50)->nullable($value = true);
            $table->string('program_date', 50)->nullable($value = true);
            $table->string('company', 50)->nullable($value = true);
            $table->string('title', 50)->nullable($value = true);
            $table->integer('d')->nullable($value = true);
            $table->integer('month')->nullable($value = true);
            $table->integer('sales_id_number')->nullable($value = true);
            $table->integer('nth_proposal_number')->nullable($value = true);
            $table->integer('value')->nullable($value = true);
            $table->string('salespax', 50)->nullable($value = true);
            $table->integer('id_number')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_number');
    }
}


