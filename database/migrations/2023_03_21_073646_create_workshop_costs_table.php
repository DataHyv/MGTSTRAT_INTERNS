<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('workshop_id', 15);
            $table->string('status')->nullable();
            $table->string('commission_sales')->nullable();
            $table->string('commission_sales_rooster')->nullable();
            $table->string('commission_referral')->nullable();
            $table->string('commission_referral_rooster')->nullable();
            $table->string('eng_mng_hourfee')->nullable();
            $table->string('eng_mng_rooster')->nullable();
            $table->string('cstmzdfee_hourfee')->nullable();
            $table->string('cstmzdfee_Num')->nullable();
            $table->string('cstmzdefee_rooster')->nullable();
            $table->string('creatorFee_hourfee')->nullable();
            $table->string('creatorFee_Numfee')->nullable();
            $table->string('creatorFee_Rooster')->nullable();
            $table->string('consultationdesignsub_rooster')->nullable();
            $table->string('LeadF_hourfee')->nullable();
            $table->string('LeadF_numfee')->nullable();
            $table->string('LeadF_nswh')->nullable();
            $table->string('LeadF_rooster')->nullable();
            $table->string('moderator_hourfee')->nullable();
            $table->string('moderator_Numfee')->nullable();
            $table->string('moderator_nswh')->nullable();
            $table->string('modmoderator_rooster')->nullable();
            $table->string('producer_hourfee')->nullable();
            $table->string('producer_numfee')->nullable();
            $table->string('producer_nswh')->nullable();
            $table->string('producer_rooster')->nullable();
            $table->string('programsubtotal_rooster')->nullable();
            $table->string('offprogram_hourfee')->nullable();
            $table->string('offprogram_numfee')->nullable();
            $table->string('offprogram_rooster')->nullable();
            $table->string('programexpenses_hourfee')->nullable();
            $table->string('programexpenses_rooster')->nullable();
            $table->string('Costtotal_rooster')->nullable();
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
        Schema::dropIfExists('workshop_costs');
    }
}
