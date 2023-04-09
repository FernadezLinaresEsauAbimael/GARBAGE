<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Terminales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('terminales', function (Blueprint $table) {

            $table->engine="InnoDB"; 
            $table->bigIncrements('id');

            $table->bigInteger('estado_id')->unsigned(); 

            $table->string('nombre');
            
            
            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados')->onDelete("cascade");
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
