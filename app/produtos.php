<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = ['id' , 'nome' , 'preco' , 'descricao'];
    protected $table = 'Produtos';
}
