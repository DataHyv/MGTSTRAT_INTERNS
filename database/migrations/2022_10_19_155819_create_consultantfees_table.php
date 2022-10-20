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
            $table->string('lead_faci')->nullable();
            $table->string('co_lead')->nullable();
            $table->string('co_lead_f2f')->nullable();
            $table->string('co_faci')->nullable();
            $table->string('lead_consultant')->nullable();
            $table->string('consulting')->nullable();
            $table->string('designer')->nullable();
            $table->string('moderator')->nullable();
            $table->string('producer')->nullable();
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
