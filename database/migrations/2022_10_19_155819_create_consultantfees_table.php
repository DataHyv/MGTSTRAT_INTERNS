<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultantfees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 30);
            $table->string('last_name', 50);
            $table->float('lead_faci')->nullable();
            $table->float('co_lead')->nullable();
            $table->float('co_lead_f2f')->nullable();
            $table->float('co_faci')->nullable();
            $table->float('lead_consultant')->nullable();
            $table->float('consulting')->nullable();
            $table->float('designer')->nullable();
            $table->float('moderator')->nullable();
            $table->float('producer')->nullable();
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
        Schema::dropIfExists('consultantfees');
    }
}
