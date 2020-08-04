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
            $table->bigInteger('jornalista_id')->unsigned()->nullable();
            $table->bigInteger('provincia_id')->unsigned()->nullable();
            $table->foreign('jornalista_id')->references('id')->on('jornalistas')->onDelete('no action');
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('Cascade');
            $table->string('nome')->nullable();
            $table->string('celular')->nullable();
            $table->text('descricao')->nullable();
            $table->string('nivel')->nullable();
            $table->longtext('imgURL')->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->enum('estado',['Nova','Em Seguimento','Resolvida'])->default('Nova');
            $table->text('provincial_encaminhado')->nullable();
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
