<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customized_engagement_forms_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('status')->nullable();
            $table->integer('batch_number')->nullable();
            $table->integer('session_number')->nullable();
            $table->string('date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('cluster')->nullable();
            $table->string('core_area')->nullable();
            $table->string('sub_fees_total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_informations');
    }
}
