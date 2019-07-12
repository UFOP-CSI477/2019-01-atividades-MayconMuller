<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regioe extends Model
{
    //

    //Lista dos campos que podem ser gravados (inseridos e atualizados) com o mass Assingment

    protected $fillable = ['nome'];
    //Lista de campos protegidos - não podem ser atualizados diretamente

    //protected $guarded = ['senha'];
}
