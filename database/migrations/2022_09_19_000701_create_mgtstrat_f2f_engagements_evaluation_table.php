<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Mgtstrat F2f Engagements Evaluation

class CreateMgtstratF2fEngagementsEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('mgtstrat_f2f_engagements_evaluation', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('mgtstrat_f2f_engagements_evaluation', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable($value = true);
            $table->string('date_of_program')->nullable($value = true);
            $table->string('program_name')->nullable($value = true);
            $table->string('company')->nullable($value = true);
            $table->integer('program_design')->nullable($value = true);
            $table->integer('method_of_delivery')->nullable($value = true);
            $table->integer('logical_and_timely_manner')->nullable($value = true);
            $table->string('like_most')->nullable($value = true);
            $table->string('like_least')->nullable($value = true);
            $table->string('impact_your_work')->nullable($value = true);
            $table->string('management_strategies_lead_facilitator', 50)->nullable($value = true);
            $table->string('name_of_management_strategies_lead_facilitator', 50)->nullable($value = true);
            $table->integer('explained_the_objectives')->nullable($value = true);
            $table->integer('captured_the_audiences_attention_1')->nullable($value = true);
            $table->integer('ensured_participants_learning_1')->nullable($value = true);
            $table->integer('built_connection_with_the_audience_1')->nullable($value = true);
            $table->integer('exhibited_strong_facilitator_presence_1')->nullable($value = true);
            $table->string('any_comments_suggestion_feedback_lead_facilitator')->nullable($value = true);
            $table->string('management_strategies_CoFacilitator')->nullable($value = true);
            $table->string('name_of_management_strategies_CoFacilitator_1')->nullable($value = true);
            $table->string('effectively_guided_the_participants_1')->nullable($value = true);
            $table->integer('captured_the_audiences_attention_2')->nullable($value = true);
            $table->integer('ensured_participants_learning_2')->nullable($value = true);
            $table->integer('built_connection_with_the_audience_2')->nullable($value = true);
            $table->integer('exhibited_strong_facilitator_presence_2')->nullable($value = true);
            $table->string('any_comments_suggestion_feedback_CoFacilitator_1')->nullable($value = true);
            $table->integer('how_likely_would_you_recommend_this_management_strat_program')->nullable($value = true);
            $table->string('short_testimonial')->nullable($value = true);
            $table->string('effectively_guided_the_participants_2')->nullable($value = true);
            $table->integer('captured_the_audiences_attention_3')->nullable($value = true);
            $table->integer('management_strategies_CoFacililator_2')->nullable($value = true);
            $table->integer('exhibited_strong_facilitator_presence_3')->nullable($value = true);
            $table->string('any_comments_suggestion_feedback_CoFacilitator_2')->nullable($value = true);
            $table->integer('ensured_participants_learning_3')->nullable($value = true);
            $table->integer('built_connection_with_the_audience_3')->nullable($value = true);
            $table->string('name_of_management_strategies_CoFacilitator_2')->nullable($value = true);
            $table->string('submitted_at')->nullable($value = true);
            $table->string('token')->nullable($value = true);

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mgtstrat_f2f_engagements_evaluation');
    }
}


