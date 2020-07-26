<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['nome_endereco', 'tipo_endereco', 'cep', 'rua', 'complemento', 'bairro', 'estado', 'cidade'];
}
