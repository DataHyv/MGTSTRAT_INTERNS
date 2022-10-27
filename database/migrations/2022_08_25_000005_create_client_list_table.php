<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 SALES REPORT

class CreateClientListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('client_list', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('client_list_table', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50)->nullable($value = true);
            $table->string('y_month_sales_number', 50)->nullable($value = true);
            $table->string('old_id_number', 50)->nullable($value = true);
            $table->string('sales_pax', 50)->nullable($value = true);
            $table->string('class', 50)->nullable($value = true);
            $table->string('industry', 50)->nullable($value = true);
            $table->string('new_old', 50)->nullable($value = true);
            $table->string('first_engagement', 50)->nullable($value = true);
            $table->string('recent_engagement', 50)->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_list');
    }
}