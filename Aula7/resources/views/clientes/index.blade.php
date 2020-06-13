@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listagem de cientes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($clientes as $cliente)
                    <li class="list-group-item">
                        <span>{{$cliente->nome}}</span>
                        <span>{{$cliente->idade}}</span>
                        <span>{{$cliente->email}}</span>
                        <span>{{$cliente->telefone}}</span>
                    </li>
                    @endforeach

                  <span class="caret">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.create') }}">{{ __('Cadastrar') }}</a>
                    </li>
                  </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
