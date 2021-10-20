<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';

    public static function getContabilidade($tipo){
        return Pessoa::where('tipo','=',$tipo)->count('tipo');
    }
}