<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemCalcadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem_calcado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_calcado');
            $table->foreign('id_calcado')->references('id')->on('calcado');
            $table->string('image_path');
            $table->boolean('principal');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('imagem_calcado');
    }
}
