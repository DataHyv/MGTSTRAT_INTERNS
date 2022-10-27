<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//MGTSTRAT Database & Mailing List

class CreateApril2021Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('april_2021', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('april_2021', function (Blueprint $table) {
            $table->id();
            $table->string('last_name')->nullable($value = true);
            $table->string('first_name')->nullable($value = true);
            $table->string('middle_name')->nullable($value = true);
            $table->string('nickname')->nullable($value = true);
            $table->string('level')->nullable($value = true);
            $table->string('status')->nullable($value = true);
            $table->string('mgtstrat_asiaCom')->nullable($value = true);
            $table->string('alternate_email')->nullable($value = true);
            $table->string('mobile_number')->nullable($value = true);
            $table->string('home_address')->nullable($value = true);
            $table->string('birthday')->nullable($value = true);
            $table->string('bank')->nullable($value = true);
            $table->string('account_number')->nullable($value = true);
            $table->string('tin')->nullable($value = true);
            $table->string('contact_person')->nullable($value = true);
            $table->string('contact_number')->nullable($value = true);

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('april_2021');
    }
}


