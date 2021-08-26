<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('telephone_number',15);
            $table->string('address',255);
            $table->string('marital_status',255);
            $table->string('no_of_children',10);
            $table->string('bank_name',50);
            $table->string('bank_account_number',50);
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
        Schema::dropIfExists('beneficiary');
    }
}
