<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//AGORILLA YEYE 2021 Evaluation Dashboard

class CreateRepublicCementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('republic_cement', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('republic_cement', function (Blueprint $table) {
            $table->id();
            $table->string('dates', 50)->nullable($value = true);
            $table->string('program_title', 50)->nullable($value = true);
            $table->float('lead_facilitator_questions_1')->nullable($value = true);
            $table->float('lead_facilitator_questions_2')->nullable($value = true);
            $table->float('lead_facilitator_questions_3')->nullable($value = true);
            $table->float('converted_score_1')->nullable($value = true);
            $table->float('moderator_questions_1')->nullable($value = true);
            $table->float('moderator_questions_2')->nullable($value = true);
            $table->float('moderator_questions_3')->nullable($value = true);
            $table->float('converted_score_2')->nullable($value = true);
            $table->string('would_you_recommend_this_training_to_other_colleagues')->nullable($value = true);
            $table->string('how_can_we_improve_the_program_further')->nullable($value = true);

             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('republic_cement');
    }
}


