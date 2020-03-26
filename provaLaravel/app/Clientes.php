<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //


    protected $fillable = [
        'id' , 'nome' , 'idade' , 'telefone' , 'email'

    ];

    protected $table = 'Clientes';


    public function vendas(){
        return $this->hasMany(CarrinhoCompras::class , 'cliente_id');
    }

}

