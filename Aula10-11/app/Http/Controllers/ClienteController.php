<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');

    }

    public function lista(){
        $clientes = Clientes::all();

        return view('clientes.listar' , ['clientes' => $clientes]);
    }
}
