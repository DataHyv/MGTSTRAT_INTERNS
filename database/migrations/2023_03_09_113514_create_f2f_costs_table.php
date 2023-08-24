<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateF2fCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f2f_costs', function (Blueprint $table) {
            $table->id();
            $table->string('f2f_id', 15);
            $table->string('cost_type', 50)->nullable();
            $table->integer('cost_noc')->nullable();
            $table->string('cost_pd', 30)->nullable();
            $table->integer('cost_nod')->nullable();
            $table->integer('cost_atd')->nullable();
            $table->integer('cost_nswh')->nullable();
            $table->string('cost_roster')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f2f_costs');
    }
}
