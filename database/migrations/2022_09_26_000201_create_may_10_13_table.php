<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 CASH POSITION

class CreateMay1013Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('may_10_13', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('may_10_13_table', function (Blueprint $table) {
            $table->id();
            $table->string('projected_collections_based_on_invoices', 50)->nullable($value = true);
            $table->string('program')->nullable($value = true);
            $table->string('due_payable')->nullable($value = true);
            $table->string('total_1')->nullable($value = true);
            $table->integer('term')->nullable($value = true);
            $table->string('days_OverDue')->nullable($value = true);
            $table->string('total_2')->nullable($value = true);
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('may_10_13');
    }
}


