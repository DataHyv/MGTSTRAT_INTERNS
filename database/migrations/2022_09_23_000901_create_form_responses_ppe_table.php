<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Mgtstrat Producer Performance Evaluation - Responses

class CreateFormResponsesPpeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('form_responses_ppe', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('form_responses_ppe', function (Blueprint $table) {
            $table->id();
            $table->string('timestamp', 50)->nullable($value = true);
            $table->string('name', 50)->nullable($value = true);
            $table->string('management_strategies_producer', 50)->nullable($value = true);
            $table->string('name_of_other_internal_mgtstrat_producer', 50)->nullable($value = true);
            $table->string('platform_used_for_program', 50)->nullable($value = true);
            $table->string('date_of_program', 50)->nullable($value = true);
            $table->string('client', 50)->nullable($value = true);
            $table->string('name_of_program')->nullable($value = true);
            $table->integer('competency_1_technical_literacy')->nullable($value = true);
            $table->integer('competency_2_partnership_management')->nullable($value = true);
            $table->integer('competency_3_agility_and_self_management')->nullable($value = true);
            $table->string('what_did_the_producer_do_well_throughout_the_program_phases')->nullable($value = true);
            $table->string('other_ways_that_the_producer_could_improve_his_her_performance')->nullable($value = true);
            $table->string('any_other_comments_suggestions')->nullable($value = true);

           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_responses_ppe');
    }
}


