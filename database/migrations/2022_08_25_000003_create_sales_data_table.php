<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//2022 SALES REPORT

class CreateSalesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('sales_data', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('sales_data_table', function (Blueprint $table) {
            $table->id();
            $table->string('status', 50)->nullable($value = true);
            $table->string('yes', 50)->nullable($value = true);
            $table->string('company', 50)->nullable($value = true);
            $table->string('subsidiary', 50)->nullable($value = true);
            $table->string('industry', 50)->nullable($value = true);
            $table->string('old_new', 50)->nullable($value = true);
            $table->string('month', 50)->nullable($value = true);
            $table->string('date', 50)->nullable($value = true);
            $table->string('core_area', 50)->nullable($value = true);
            $table->string('engagement_title', 50)->nullable($value = true);
            $table->string('mgtstrat_u_title', 50)->nullable($value = true);
            $table->string('batch', 50)->nullable($value = true);
            $table->integer('hours_1')->nullable($value = true);
            $table->integer('pax')->nullable($value = true);
            $table->string('classification', 50)->nullable($value = true);
            $table->string('sub_class', 50)->nullable($value = true);
            $table->string('customized_cluster', 50)->nullable($value = true);
            $table->string('mgtstrat_u_cluster', 50)->nullable($value = true);
            $table->string('mgtstrat_u_intelligence', 50)->nullable($value = true);
            $table->string('sales_pax', 50)->nullable($value = true);
            $table->integer('consulting_1')->nullable($value = true);
            $table->integer('design_1')->nullable($value = true);
            $table->integer('coaching_1')->nullable($value = true);
            $table->integer('program_1')->nullable($value = true);
            $table->integer('pd_others')->nullable($value = true);
            $table->integer('tot_revenue')->nullable($value = true);
            $table->integer('comm')->nullable($value = true);
            $table->integer('referral')->nullable($value = true);
            $table->integer('em')->nullable($value = true);
            $table->integer('offsite_pc')->nullable($value = true);
            $table->integer('consulting_2')->nullable($value = true);
            $table->integer('design_2')->nullable($value = true);
            $table->integer('coaching_2')->nullable($value = true);
            $table->integer('program_2')->nullable($value = true);
            $table->integer('sub_con')->nullable($value = true);
            $table->integer('off_program_fee')->nullable($value = true);
            $table->integer('consultant')->nullable($value = true);
            $table->string('role', 50)->nullable($value = true);
            $table->integer('rate')->nullable($value = true);
            $table->string('hours_2', 50)->nullable($value = true);
            $table->string('hldy_fctr', 50)->nullable($value = true);
            $table->string('remarks', 50)->nullable($value = true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_data');
    }
}
