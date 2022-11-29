<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_cost', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('cstmzd_eng_form_id', 15);
            $table->integer('batch_number')->nullable();
            $table->integer('session_number')->nullable();
            $table->string('type', 50)->nullable($value = true);
            $table->integer('consultant_num')->nullable($value = true);
            $table->string('hour_fee', 30)->nullable($value = true);
            $table->integer('hour_num')->nullable($value = true);
            $table->integer('nswh')->nullable($value = true);
            $table->string('rooster')->nullable($value = true);
            $table->string('notes')->nullable($value = true);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_cost');
    }
}
