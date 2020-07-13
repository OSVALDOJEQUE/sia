<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ocorrencia_id')->unsigned()->index();
            $table->tinyInteger('emissor');
            $table->tinyInteger('destino');
            $table->string('conteudo');
            $table->tinyInteger('nivel');
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias')->onDelete('cascade');
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
        Schema::dropIfExists('mensages');
    }
}
