<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheet6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet6', function (Blueprint $table) {
            $table->id();
            $table->string('date', 50)->nullable($value = true);
            $table->string('time', 50)->nullable($value = true);
            $table->float('duration_in_hours')->nullable($value = true);
            $table->string('purpose', 50)->nullable($value = true);
            $table->string('details', 50)->nullable($value = true);
            $table->string('contact', 50)->nullable($value = true);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sheet6');
    }
}
