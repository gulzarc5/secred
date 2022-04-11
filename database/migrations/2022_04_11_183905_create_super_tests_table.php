<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',256)->nullable();
            $table->string('father_name',256)->nullable();
            $table->string('mother_name',256)->nullable();
            $table->char('gender',1)->comment("M:MAle,F:female");
            $table->string('village',256)->nullable();
            $table->string('land_mark',256)->nullable();
            $table->string('po',256)->nullable();
            $table->string('district',256)->nullable();
            $table->string('school',256)->nullable();
            $table->string('medium',256)->nullable();
            $table->string('whatsapp_no',256)->nullable();
            $table->string('mobile_no',256)->nullable();
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
        Schema::dropIfExists('super_tests');
    }
}
