<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_informations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('client_id')->nullable()->constrained()->cascadeOnDelete();
                $table->string('workshop_id', 15);
                // $table->string('status', 15)->nullable();
                // $table->string('batch_name', 100)->nullable();
                $table->string('engagement_title', 100)->nullable();
                $table->string('workshop_title', 100)->nullable();
                $table->string('cluster')->nullable();
                $table->string('intelligence')->nullable();
                $table->integer('pax_number')->nullable();
                $table->string('program_dates')->nullable();
                $table->string('program_start_time')->nullable();
                $table->string('program_end_time')->nullable();
                $table->string('workshop_fees_total', 30)->nullable();
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
        Schema::dropIfExists('workshop_informations');
    }
}
