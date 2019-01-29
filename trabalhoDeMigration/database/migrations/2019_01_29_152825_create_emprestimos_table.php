<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('dataDeInicio');
            $table->string('dataTermino');
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->integer('livro_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('emprestimos', function (Blueprint $table){
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
            $table->foreign('livro_id')->references('id')->on('livros')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
