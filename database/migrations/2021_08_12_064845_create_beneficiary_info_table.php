<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiary_question_id');
            $table->unsignedBigInteger('beneficiary_id');
            $table->string('answer',255);
            $table->timestamps();

            $table->foreign('beneficiary_question_id')->references('id')->on('beneficiary_question')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('beneficiary_id')->references('id')->on('beneficiary')->onUpdate('cascade')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiary_info');
    }
}

