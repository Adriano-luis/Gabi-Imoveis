<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['nome',
    'telefone',
    'valorMin',
    'valorMax',
    'tipo',
    'endereco',
    'bairro',
    'metragemTotal',
    'qtComodos',
    'quarto',
    'individual',
    'condominio',
    'mobilhado'];
}
