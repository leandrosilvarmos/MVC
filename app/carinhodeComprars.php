<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carinhodeComprars extends Model
{
    //

    protected $fillable = [
        'id ' , 'produto' , 'quantidade' , 'valor_frete' , 'valor_total'
    ];

    protected $table = 'carinhodeComprars';
}
