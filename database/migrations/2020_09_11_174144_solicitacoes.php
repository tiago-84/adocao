<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Solicitacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->unsignedInteger('id_animal');
            $table->foreign('id_animal')->references('id')->on('animais')->onDelete('cascade');
            $table->integer('limit');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telefone');
            $table->string('cpf');
            $table->string('cep');
            $table->text('texto');
            $table->text('observacao');
            $table->string('status')->default('Solicitação Realizada');
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
        Schema::dropIfExists('solicitacoes');

    }
}
