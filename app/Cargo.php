<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['car_nome'];
    protected $guarded = ['cargo_id'];
    protected $table = ['wtg_cargo'];

    public function funcionarios(){
        return $this->hasMany('App\Funcionario', 'cargo_id');
    }
}
