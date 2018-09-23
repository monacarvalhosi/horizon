<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{

    /* Conforme documentacao 

        wtg_cargo(
            cargo_id int not null auto increment,
            car_nome varchar(255)
        )
    */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wtg_cargo', function (Blueprint $table) {
            $table->increments('cargo_id');
            $table->char('car_nome',255);
            $table->timestamps(); /**/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wtg_cargo');
    }
}
