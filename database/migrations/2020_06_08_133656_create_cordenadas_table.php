<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCordenadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cordenadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ocorrencia_id')->unsigned();
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias')->onDelete('cascade');
            $table->string('nome');
            $table->string('localizacao');
            $table->double('logintude');
            $table->double('latitude');
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
        Schema::dropIfExists('cordenadas');
    }
}
