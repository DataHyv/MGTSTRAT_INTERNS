<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngagementCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engagement_costs', function (Blueprint $table) {
            $table->id();
            $table->string('cstmzd_eng_form_id', 15);
            $table->string('type', 50)->nullable($value = true);
            $table->integer('consultant_num')->nullable($value = true);
            $table->string('hour_fee', 30)->nullable($value = true);
            $table->integer('hour_num')->nullable($value = true);
            $table->integer('nswh')->nullable($value = true);
            $table->string('rooster')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engagement_costs');
    }
}
