<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
   	protected $fillable = ['fun_nome',
							'fun_salario' ,
							'fun_data_nascimento' ,
							'fun_data_contratacao' ,
							'cargo_id',
							'setor_id'];
    protected $guarded = ['funcionario_id'];
    protected $table = ['wtg_funcionario'];

     public function setor(){
        return $this->belongsTo('App\Setor', 'setor_id');
    }

    public function cargo(){
        return $this->belongsTo('App\Cargo', 'cargo_id');
    }
}
