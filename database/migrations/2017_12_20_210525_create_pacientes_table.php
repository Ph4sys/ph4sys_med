<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->integer('bairro_id')->unsigned();
            $table->foreign('bairro_id')->references('id')->on('bairros');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->integer('profissao_id')->unsigned();
            $table->foreign('profissao_id')->references('id')->on('profissoes');
            $table->integer('classe_paciente_id')->unsigned();
            $table->foreign('classe_paciente_id')->references('id')->on('classes_paciente');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status_paciente');
            $table->integer('sexo_id')->unsigned();
            $table->foreign('sexo_id')->references('id')->on('sexos');
            $table->integer('estado_civil_id')->unsigned();
            $table->foreign('estado_civil_id')->references('id')->on('estados_civis');

            $table->string('nome');
            $table->string('nome_social');
            $table->date('nascimento');
            $table->string('telefone');
            $table->string('celular');
            $table->string('celular_2');
            $table->string('nome_contato');
            $table->string('tel_contato');
            $table->string('endereco');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cep');
            $table->string('email');
            $table->string('rg');
            $table->string('cpf');
            $table->string('responsavel');
            $table->string('foto');
            $table->string('observacao');

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
        Schema::drop('pacientes');
    }
}
