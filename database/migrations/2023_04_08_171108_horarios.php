<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('horarios', function (Blueprint $table) {

            $table->engine="InnoDB"; 
            $table->bigIncrements('id');
            $table->time('horaInicio');
            $table->time('horaFinal');
            $table->date('fecha');   
            
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
        //
    }
}
