<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcorrenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_jornalista');
            $table->integer('celular');
            $table->text('descricao')->nullable();
            $table->integer('nivel');
            $table->string('cordenadas');
            $table->enum('estado',['Novo','Em Seguimento','Resolvido'])->defaut('Novo');
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
        Schema::dropIfExists('ocorrencias');
    }
}
