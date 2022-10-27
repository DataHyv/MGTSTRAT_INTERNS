<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//CONSULTANT REVENUE TRACKER

class CreateSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('summary', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('summary', function (Blueprint $table) {
            
        //MANAGEMENT TEAM SUPPORT PAYMENT SUMMARY
            $table->id();
            $table->string('year_2022', 50)->nullable($value = true);
            $table->string('role', 50)->nullable($value = true);
            $table->string('jan')->nullable($value = true);
            $table->string('feb')->nullable($value = true);
            $table->string('mar')->nullable($value = true);
            $table->string('apr')->nullable($value = true);
            $table->string('may')->nullable($value = true);
            $table->string('june')->nullable($value = true);
            $table->string('july')->nullable($value = true);
            $table->string('august')->nullable($value = true);
            $table->string('september')->nullable($value = true);
            $table->string('october')->nullable($value = true);
            $table->string('november')->nullable($value = true);
            $table->string('december')->nullable($value = true);
            $table->string('total_gross')->nullable($value = true);
            $table->string('ewt')->nullable($value = true);
            $table->string('net')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('summary');
    }
}


