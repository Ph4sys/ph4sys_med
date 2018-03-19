<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposTelefoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_telefone', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->integer('bairro_id')->unsigned();
            $table->foreign('bairro_id')->references('id')->on('bairros');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->string('nome');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cep');
            $table->string('responsavel');
            $table->string('rg');
            $table->string('cnpj');
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
        Schema::drop('tipos_telefone');
    }
}
