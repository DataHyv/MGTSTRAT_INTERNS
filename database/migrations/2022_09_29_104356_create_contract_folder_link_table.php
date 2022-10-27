<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractFolderLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_folder_link', function (Blueprint $table) {
            $table->id();
            $table->string('surname', 50)->nullable($value = true);
            $table->string('firstname', 50)->nullable($value = true);
            $table->string('nickname', 50)->nullable($value = true);
            $table->string('total_revenue')->nullable($value = true);
            $table->string('engagement_contract_folder_link')->nullable($value = true);
            $table->integer('undifined_column')->nullable($value = true);
            
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
        Schema::dropIfExists('contract_folder_link');
    }
}
