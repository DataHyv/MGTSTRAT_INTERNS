<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 SALES REPORT

class CreateReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('reference', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('reference', function (Blueprint $table) {
            $table->id();
            $table->string('cluster_1', 50)->nullable($value = true);
            $table->string('primary_core_area', 50)->nullable($value = true);
            $table->string('mgtstrat_u_titles', 50)->nullable($value = true);
            $table->string('cluster_2', 50)->nullable($value = true);
            $table->string('intelligence_for_mgtstrat_u_only_1', 50)->nullable($value = true);
            $table->string('mgtstrat_u_webinar_titles', 50)->nullable($value = true);
            $table->string('cluster_3', 50)->nullable($value = true);
            $table->string('intelligence_for_mgtstrat_u_only_2', 50)->nullable($value = true);
            $table->string('customized', 50)->nullable($value = true);
            $table->string('mgtstrat_u', 50)->nullable($value = true);
            $table->string('coaching', 50)->nullable($value = true);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reference');
    }
}


