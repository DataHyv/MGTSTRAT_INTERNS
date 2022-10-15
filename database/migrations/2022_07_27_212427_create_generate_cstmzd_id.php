<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerateCstmzdId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * YEAR(CURDATE())
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER generate_cstmzd_id BEFORE INSERT ON customized_engagement_forms FOR EACH ROW
            BEGIN
                INSERT INTO sequence_customized_engagement_form VALUES (NULL);
                SET NEW.cstmzd_eng_form_id = CONCAT("CSTMZD_", LPAD(LAST_INSERT_ID(), 6, "0"));
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generate_cstmzd_id');
    }
}
