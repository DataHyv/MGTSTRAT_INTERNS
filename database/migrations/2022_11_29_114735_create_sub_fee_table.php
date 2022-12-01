<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('cstmzd_eng_form_id', 15);
            $table->integer('batch_number')->nullable();
            $table->integer('session_number')->nullable();
            $table->string('type', 50)->nullable();
            $table->integer('consultant_num')->nullable();
            $table->string('hour_fee', 30)->nullable();
            $table->integer('hour_num')->nullable();
            $table->integer('nswh')->nullable();
            $table->string('nswh_percent', 5)->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('sub_fee');
    }
}
