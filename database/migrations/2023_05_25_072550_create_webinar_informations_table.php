<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('webinar_id');
            // $table->string('status', 15)->nullable();
            // $table->string('batch_name', 100)->nullable();
            $table->string('engagement_title')->nullable();
            $table->string('webinar_title')->nullable();
            $table->string('cluster')->nullable();
            $table->string('intelligence')->nullable();
            $table->integer('pax_number')->nullable();
            $table->boolean('date_covered')->nullable(); //  If the value is 0, the switch is off. If the value is 1, the switch is on.
            $table->string('program_date')->nullable();
            $table->string('program_start_time')->nullable();
            $table->string('program_end_time')->nullable();
            $table->string('webinar_fees_total')->nullable(); // will revert it back to integer
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
        Schema::dropIfExists('webinar_informations');
    }
}
