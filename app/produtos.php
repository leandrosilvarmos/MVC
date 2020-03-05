<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    //

    protected $fillable = [
        'id', 'preco', 'nome' , 'descricao',
    ];

    protected $table = 'produtos';

}
