<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetorsTable extends Migration
{
        /*
        conforme documentacao

        wtg_setor(
            setor_id int not null auto increment,
            set_nome varchar(255)
        )
        */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wtg_setor', function (Blueprint $table) {
            $table->increments('setor_id');
            $table->char('set_nome',255);
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
        Schema::dropIfExists('wtg_setor');
    }
}
