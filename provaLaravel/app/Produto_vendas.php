<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_vendas extends Model
{
    protected $fillable = [
        'id ' , 'venda_id' , 'produto_id' , 'quantidade' , 'valor' ,
    ];

    protected $table = 'Produto_vendas' ;

    public function produtosVendas(){
        return $this->hasMany(Produto_vendas::class , 'vendas_id');
    }
}
