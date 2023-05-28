<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coachings', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('client')->nullable();
            $table->string('engagement_title')->nullable();
            $table->string('engagement_type')->nullable();
            $table->string('number_of_pax')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('cd_num_of_coaches')->nullable();
            $table->string('cd_daily_fees')->nullable();
            $table->string('cd_num_of_sessions')->nullable();
            $table->string('cd_nswh')->nullable();
            $table->string('cd_notes')->nullable();
            $table->string('ec_num_of_coaches')->nullable();
            $table->string('ec_daily_fees')->nullable();
            $table->string('ec_num_of_sessions')->nullable();
            $table->string('ec_nswh')->nullable();
            $table->string('ec_notes')->nullable();
            $table->string('pdc_num_of_coaches')->nullable();
            $table->string('pdc_daily_fees')->nullable();
            $table->string('pdc_num_of_sessions')->nullable();
            $table->string('pdc_nswh')->nullable();
            $table->string('pdc_notes')->nullable();
            $table->string('gsc_num_of_coaches')->nullable();
            $table->string('gsc_daily_fees')->nullable();
            $table->string('gsc_num_of_sessions')->nullable();
            $table->string('gsc_nswh')->nullable();
            $table->string('gsc_notes')->nullable();
            $table->string('waltc_num_of_coaches')->nullable();
            $table->string('waltc_daily_fees')->nullable();
            $table->string('waltc_num_of_sessions')->nullable();
            $table->string('waltc_nswh')->nullable();
            $table->string('dg_percentage')->nullable();
            $table->string('dg_notes')->nullable();
            $table->string('engagement_fees_total')->nullable();
            $table->string('s_session_fees')->nullable();
            $table->string('s_roster')->nullable();
            $table->string('r_session_fees')->nullable();
            $table->string('r_roster')->nullable();
            $table->string('em_session_fees')->nullable();
            $table->string('em_roster')->nullable();
            $table->string('subtotal_roster')->nullable();
            $table->string('engagement_cost_total')->nullable();
            $table->string('total_package_roster')->nullable();
            $table->string('pf_lcto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coachings');
    }
}
