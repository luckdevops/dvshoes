<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalcadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 10);
            $table->unsignedInteger('id_produto');
            $table->foreign('id_produto')->references('id')->on('produto');
            $table->unsignedInteger('id_tipo_produto');
            $table->foreign('id_tipo_produto')->references('id')->on('tipo_produto');
            $table->unsignedInteger('id_cor');
            $table->foreign('id_cor')->references('id')->on('cor');
            $table->unsignedInteger('id_numeracao');
            $table->foreign('id_numeracao')->references('id')->on('numeracao');
            $table->decimal('preco_custo');
            $table->decimal('preco_venda_antigo');
            $table->decimal('preco_venda_novo');
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
        Schema::dropIfExists('calcado');
    }
}
