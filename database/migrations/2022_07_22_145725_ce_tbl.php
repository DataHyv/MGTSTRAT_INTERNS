<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CeTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customized_engagement_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('cstmzd_eng_form_id', 15);
            $table->string('status', 15)->nullable();
            // $table->string('batch_name', 100)->nullable();
            $table->string('customized_type', 50)->nullable();
            $table->string('ga_percent', 4)->nullable();
            $table->string('engagement_title', 100)->nullable();
            $table->integer('pax_number')->nullable();
            $table->integer('batch_number')->nullable();
            $table->integer('session_number')->nullable();
            $table->json('program_dates')->nullable();
            $table->string('program_start_time')->nullable();
            $table->string('program_end_time')->nullable();
            $table->string('cluster')->nullable();
            $table->string('core_area')->nullable();
            $table->string('Engagement_fees_total', 30);
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
        Schema::dropIfExists('customized_engagement_forms');
        Schema::dropIfExists('engagement_fees');
    }
}
