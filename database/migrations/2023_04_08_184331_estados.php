<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('estados', function (Blueprint $table) {

            $table->engine="InnoDB"; 
            $table->bigIncrements('id');

            $table->BigInteger('municipio_id')->unsigned(); 

            $table->string('nombre'); 
            
            $table->timestamps();

            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete("cascade");
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
