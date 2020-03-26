<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProdutoVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produto_vendas', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('venda_id')->unsigned();
            $table->bigInteger('produto_id')->unsigned();
            $table->foreign('venda_id')->references('id')->on('CarrinhoCompras')->onDeleted('cascade');
            $table->foreign('produto_id')->references('id')->on('Produtos')->onDeleted('cascade');
            $table->Integer('quantidade');
            $table->double('valor' , 10.2);
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
        Schema::dropIfExists('Produto_vendas');
    }
}
