<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = ['set_nome'];
    protected $guarded = ['setor_id'];
    protected $table = ['wtg_setor'];

     public function funcionarios(){
        return $this->hasMany('App\Funcionario', 'setor_id');
    }
}
