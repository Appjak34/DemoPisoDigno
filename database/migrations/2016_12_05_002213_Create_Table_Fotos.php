<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fotos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre');
        $table->integer('id_Familia')->unsigned();
        $table->timestamps();
        $table->enum('tipo', ['PDT', 'PEE','PT','Otros']);	
        $table->foreign('id_Familia')->references('id')->on('familias') ->onDelete('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
