<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarrinhoCompras extends Model
{

    protected $fillable = [
        'id' , 'data_venda' , 'cliente_id' ,
    ];

    protected $table = 'CarrinhoCompras';


 public function Clientes(){
     return $this->belongsTo(Clientes::class, 'cliente_id');
 }

}
