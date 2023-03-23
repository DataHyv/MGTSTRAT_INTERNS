<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('workshop_id', 15);
            $table->string('type', 50)->nullable();
            $table->integer('package_fees')->nullable();
            $table->string('num_sessions', 30)->nullable();
            $table->integer('nswh')->nullable();
            $table->string('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_fees');
    }
}
