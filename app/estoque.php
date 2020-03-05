<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estoque extends Model
{
    //

    protected $fillable = [

        'id' , 'qtd_estoque'


    ];

    protected $table = 'estoque';

}
