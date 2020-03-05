<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCarinhodeCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carinhodeCompars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produto');
            $table->integer('quantidade');
            $table->double('valor_frete', 10,2);
            $table->double('valor_total' , 10,2);
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
        Schema::dropIfExists('carinhodeCompars');
    }
}
