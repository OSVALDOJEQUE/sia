<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornalistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornalistas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome')->default('N/A');
            $table->string('celular');
            $table->string('email')->default('N/A');
            $table->string('Entidade')->nullable();
            $table->string('contacto')->nullable();
            $table->enum('estado',['Aprovado','Reprovado','Pendente'])->default('Pendente');
            $table->string('modelo')->nullable();
            $table->string('plataforma')->nullable();
            $table->string('uuid')->nullable();
            $table->string('versao')->nullable();
            $table->string('serie')->nullable();
            $table->string('fabrico')->nullable();
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
        Schema::dropIfExists('jornalistas');
    }
}
