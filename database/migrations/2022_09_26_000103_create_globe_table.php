<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//AGORILLA YEYE 2021 Evaluation Dashboard

class CreateGlobeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('globe', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('globe', function (Blueprint $table) {
            $table->id();
            $table->string('dates', 50)->nullable($value = true);
            $table->string('program_title', 50)->nullable($value = true);
            $table->float('lead_facilitator_questions_1')->nullable($value = true);
            $table->float('lead_facilitator_questions_2')->nullable($value = true);
            $table->float('lead_facilitator_questions_3')->nullable($value = true);
            $table->float('lead_facilitator_questions_4')->nullable($value = true);
            $table->float('lead_facilitator_questions_5')->nullable($value = true);
            $table->float('lead_facilitator_questions_6')->nullable($value = true);
            $table->float('lead_facilitator_questions_7')->nullable($value = true);
            $table->float('lead_facilitator_questions_8')->nullable($value = true);
            $table->float('lead_facilitator_questions_9')->nullable($value = true);
            $table->float('lead_facilitator_questions_10')->nullable($value = true);
            $table->float('converted_score_1')->nullable($value = true);
            $table->float('lead_facilitator_questions_11')->nullable($value = true);
            $table->float('moderator_questions_1')->nullable($value = true);
            $table->float('moderator_questions_2')->nullable($value = true);
            $table->float('moderator_questions_3')->nullable($value = true);
            $table->float('moderator_questions_4')->nullable($value = true);
            $table->float('moderator_questions_5')->nullable($value = true);
            $table->float('moderator_questions_6')->nullable($value = true);
            $table->float('moderator_questions_7')->nullable($value = true);
            $table->float('moderator_questions_8')->nullable($value = true);
            $table->float('moderator_questions_9')->nullable($value = true);
            $table->float('moderator_questions_10')->nullable($value = true);
            $table->float('converted_score_2')->nullable($value = true);
            $table->float('moderator_questions_11')->nullable($value = true);
            $table->string('comments_and_suggestions')->nullable($value = true);

             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('globe');
    }
}


