<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
/*
    wtg_funcionario(
funcionario_id int not null auto increment,
fun_nome varchar(255),
fun_salario decimal,
fun_data_nascimento datetime,
fun_data_contratação datetime,
cargo_id,
setor_id
)
*/

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wtg_funcionario', function (Blueprint $table) {
            $table->increments('funcionario_id');
            $table->string('fun_nome',255);
            $table->decimal('fun_salario');
            $table->datetime('fun_data_nascimento');
            $table->datetime('fun_data_contratacao');

            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')
                    ->references('cargo_id')
                    ->on('wtg_cargo')
                    ->onDelete('cascade');

            $table->integer('setor_id')->unsigned();
            $table->foreign('setor_id')
                    ->references('setor_id')
                    ->on('wtg_setor')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('wtg_funcionario');
    }
}
