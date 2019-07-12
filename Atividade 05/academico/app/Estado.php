<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //Lista dos campos que podem ser gravados (inseridos e atualizados) com o mass Assingment

    //protected $fillable = ['nome', 'sigla'];
    //Lista de campos protegidos - não podem ser atualizados diretamente

    //protected $guarded = ['senha'];



  // 1:n com as cidades
    public function cidades (){
    	return $this->hasMany('App\Cidade');
    }



}
