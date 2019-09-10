<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('valor');
            $table->integer('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos'); // produto_id é chave primária da tabela produtos
             $table->integer('pontosdados_id');
            $table->foreign('pontosdados_id')->references('id')->on('pontodados'); // pontosdados_id é chave primária da tabela pontodados
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
        Schema::dropIfExists('opcaos');
    }
}
