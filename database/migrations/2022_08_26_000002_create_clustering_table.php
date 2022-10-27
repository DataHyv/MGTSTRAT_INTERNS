<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 SALES REPORT

class CreateClusteringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('clustering', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('clustering', function (Blueprint $table) {
            $table->id();
            $table->string('program_titles', 50)->nullable($value = true);
            $table->string('primary_cluster_gcal_tag_1', 50)->nullable($value = true);
            $table->string('secondary_cluster_gcal_tag_2', 50)->nullable($value = true);
            $table->string('msu_custom_gcal_tag_3', 50)->nullable($value = true);
            $table->string('primary_core_area', 50)->nullable($value = true);
            $table->string('secondary_core_area', 50)->nullable($value = true);
            $table->string('intelligence_mgtstrat_u_only', 50)->nullable($value = true);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clustering');
    }
}


