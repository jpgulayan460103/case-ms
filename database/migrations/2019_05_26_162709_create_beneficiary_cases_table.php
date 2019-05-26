<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeneficiaryCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiary_cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('beneficiary_id')->unsigned()->nullable();
            $table->bigInteger('case_category_id')->unsigned()->nullable();
            $table->text('reason')->nullable();
            $table->text('intervention')->nullable();
            $table->text('remarks')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('beneficiary_cases');
    }
}
