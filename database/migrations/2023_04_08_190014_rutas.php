<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rutas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rutas', function (Blueprint $table) {

            $table->engine="InnoDB"; 
            $table->bigIncrements('id');

            $table->bigInteger('camion_id')->unsigned(); 

            $table->string('nombre');
            $table->double('longitud');  
            $table->double('latitud');

            
            $table->timestamps();

            $table->foreign('camion_id')->references('id')->on('camiones')->onDelete("cascade");
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
