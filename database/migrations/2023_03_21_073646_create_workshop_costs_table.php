<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('workshop_id', 15);
            $table->string('type', 50)->nullable();
            $table->string('hour_fee', 30)->nullable();
            $table->integer('hour_num')->nullable();
            $table->integer('nswh')->nullable();
            $table->string('rooster')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_costs');
    }
}
