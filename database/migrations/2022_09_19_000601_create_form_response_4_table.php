<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//MgtStrat EM Performance Evaluation - Responses

class CreateFormResponse4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('form_response_4', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('form_response_4', function (Blueprint $table) {
            $table->id();
            $table->string('timestamp', 50)->nullable($value = true);
            $table->string('name', 50)->nullable($value = true);
            $table->string('management_strategies_engagement_manager')->nullable($value = true);
            $table->integer('strategic_management_1')->nullable($value = true);
            $table->integer('strategic_management_2')->nullable($value = true);
            $table->integer('strategic_management_3')->nullable($value = true);
            $table->integer('strategic_management_4')->nullable($value = true);
            $table->integer('stakeholder_management_1')->nullable($value = true);
            $table->integer('stakeholder_management_2')->nullable($value = true);
            $table->integer('stakeholder_management_3')->nullable($value = true);
            $table->integer('stakeholder_management_4')->nullable($value = true);
            $table->integer('stakeholder_management_5')->nullable($value = true);
            $table->integer('stakeholder_management_6')->nullable($value = true);
            $table->integer('implementation_management_1')->nullable($value = true);
            $table->integer('implementation_management_2')->nullable($value = true);
            $table->integer('implementation_management_3')->nullable($value = true);
            $table->string('top_1_strength')->nullable($value = true);
            $table->string('top_1_development_area')->nullable($value = true);
            $table->string('other_items_behaviors_you_are_looking_for_in_an_em')->nullable($value = true);
            $table->string('clients_that_you_and_the_em_worked_with', 500)->nullable($value = true);
            $table->string('top_2_strength')->nullable($value = true);
            $table->string('top_3_strength')->nullable($value = true);
            $table->string('top_2_development_area')->nullable($value = true);
            $table->string('top_3_development_area')->nullable($value = true);
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_response_4');
    }
}


