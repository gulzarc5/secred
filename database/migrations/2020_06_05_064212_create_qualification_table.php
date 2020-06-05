<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admsn_id');
            $table->bigInteger('eng_perc');
            $table->bigInteger('second_lang_perc');
            $table->bigInteger('math_perc');
            $table->bigInteger('science_perc');
            $table->bigInteger('ss_perc');
            $table->bigInteger('Others_perc');
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
        Schema::dropIfExists('qualification');
    }
}
