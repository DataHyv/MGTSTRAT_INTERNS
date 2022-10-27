<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//AGORILLA YEYE 2021 Evaluation Dashboard

class CreateWtwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('wtw', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('wtw_table', function (Blueprint $table) {
            $table->id();
            $table->string('dates', 50)->nullable($value = true);
            $table->string('program_title', 50)->nullable($value = true);
            $table->float('lead_facilitator_questions_1')->nullable($value = true);
            $table->float('lead_facilitator_questions_2')->nullable($value = true);
            $table->float('lead_facilitator_questions_3')->nullable($value = true);
            $table->float('lead_facilitator_questions_4')->nullable($value = true);
            $table->float('lead_facilitator_questions_5')->nullable($value = true);
            $table->float('moderator_questions_1')->nullable($value = true);
            $table->float('moderator_questions_2')->nullable($value = true);
            $table->float('moderator_questions_3')->nullable($value = true);
            $table->float('moderator_questions_4')->nullable($value = true);
            $table->float('moderator_questions_5')->nullable($value = true);
            $table->string('would_you_recommend_this_training_to_other_colleagues')->nullable($value = true);

             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wtw');
    }
}


