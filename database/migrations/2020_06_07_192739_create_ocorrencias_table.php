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
            $table->string('nome')->nullable()->defaut('--');
            $table->integer('celular')->nullable()->defaut('--');
            $table->longtext('descricao')->nullable('Em situação de alto risco.');
            $table->integer('nivel')->nullable()->defaut(100);
            $table->longtext('imgURL')->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->enum('estado',['Nova','Em Seguimento','Resolvida'])->defaut('Nova');
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
