<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('num1');
            $table->bigInteger('num2');
            $table->bigInteger('sum');
            $table->bigInteger('sub');
            $table->bigInteger('mul');
            $table->bigInteger('div');
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
        Schema::dropIfExists('calc');
    }
}
