<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Camiones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('camiones', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('terminal_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();  

            $table->string('modelo');
            $table->string('placas');

            
            $table->timestamps();

            $table->foreign('terminal_id')->references('id')->on('terminales')->onDelete("cascade");
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete("cascade");
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
