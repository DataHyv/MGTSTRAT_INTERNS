<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Mgtstrat Peer DOPE Form - Responses

class CreateFormResponses1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('form_responses_1', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('form_responses_1', function (Blueprint $table) {
            $table->id();
            $table->string('timestamp', 50)->nullable($value = true);
            $table->string('date')->nullable($value = true);
            $table->string('client')->nullable($value = true);
            $table->string('title_of_program')->nullable($value = true);
            $table->string('name_of_lead')->nullable($value = true);
            $table->integer('please_rate_our_preparation_for_this_session')->nullable($value = true);
            $table->integer('how_well_did_i_manage_the_content')->nullable($value = true);
            $table->integer('how_effectively_did_i_communicate_with_the_audience')->nullable($value = true);
            $table->integer('how_well_did_i_manage_the_learning_of_our_participants')->nullable($value = true);
            $table->integer('how_effectively_did_i_build_relationships_with_the_participants')->nullable($value = true);
            $table->integer('how_did_you_find_my_virtual_presence')->nullable($value = true);
            $table->string('what_are_2_3_things_that_i_did_well_as_your_lead')->nullable($value = true);
            $table->string('what_are_2_3_things_i_can_do_better_as_a_lead_facilitator')->nullable($value = true);
            $table->string('who_are_you_evaluating')->nullable($value = true);
            $table->integer('aym_how_well_did_i_support_you_throughout_the_program_content')->nullable($value = true);
            $table->integer('aym_how_well_did_i_manage_audience_interaction')->nullable($value = true);
            $table->integer('aym_how_well_did_i_build_connections_with_the_audience')->nullable($value = true);
            $table->integer('aym_how_was_my_virtual_presence')->nullable($value = true);
            $table->string('what_are_2_3_things_i_did_well')->nullable($value = true);
            $table->string('what_are_2_3_things_i_can_do_better_as_a_mod')->nullable($value = true);
            $table->string('name_of_moderator')->nullable($value = true);

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_responses_1');
    }
}


