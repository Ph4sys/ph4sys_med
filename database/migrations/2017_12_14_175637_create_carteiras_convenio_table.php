<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarteirasConvenioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carteiras_convenio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('convenio_id')->unsigned();
            $table->foreign('convenio_id')->references('id')->on('convenios');
           
            $table->string('numero');
            $table->string('validade');

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
        Schema::drop('carteiras_convenio');
    }
}
