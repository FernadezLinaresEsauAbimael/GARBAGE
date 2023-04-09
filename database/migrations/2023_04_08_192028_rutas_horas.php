<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RutasHoras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rutas_horas', function (Blueprint $table) {

            $table->engine="InnoDB"; 
            $table->bigIncrements('id');

            $table->bigInteger('ruta_id')->unsigned();
            $table->bigInteger('horario_id')->unsigned();  
            
            $table->timestamps();

            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete("cascade");
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete("cascade");
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
