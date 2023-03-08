<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateF2fFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f2f_fees', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('client_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('f2f_id', 15);
            $table->string('fee_type', 50)->nullable();
            $table->integer('fee_noc')->nullable();
            $table->string('fee_pd', 30)->nullable();
            $table->integer('fee_nod')->nullable();
            $table->integer('fee_atd')->nullable();
            $table->integer('fee_nswh')->nullable();
            $table->string('nswh_percent', 5)->nullable();
            $table->string('fee_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f2f_fees');
    }
}
