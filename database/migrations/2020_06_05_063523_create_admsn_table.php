<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmsnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admsn', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',256)->nullable();
            $table->string('father_name',256)->nullable();
            $table->string('mother_name',256)->nullable();
            $table->string('email',256)->nullable();
            $table->string('mobile',256)->nullable();
            $table->date('dob',256)->nullable();
            $table->char('gender',1)->comment('1 = male,2=female')->nullable();
            $table->string('stream',256)->nullable();
            $table->string('religion',256)->nullable();
            $table->string('caste',256)->nullable();
            $table->longText('r_address')->nullable();
            $table->char('aggrement',1)->comment('1=yes,2=no')->default(2);
            $table->char('payment_type',1)->comment('1=pay at college,2=Online Pay')->nullable();
            $table->char('payment_status',1)->comment('1=not paid,2=paid')->default(1);
            $table->char('payment_id',1)->nullable();
            $table->char('transaction_id',1)->nullable();
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
        Schema::dropIfExists('admsn');
    }
}
