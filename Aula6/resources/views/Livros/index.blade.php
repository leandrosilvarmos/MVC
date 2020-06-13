<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <main>
        <section class="container-fluid">
            <a href="{{route('livros.create')}}"> Criar Livros</a>


            <div>
                <ul class="list-group">
                    @foreach($livros as $livro)
                    <li class="list-group-item">
                        <span>Nome do Livro: {{$livro->nome}} /  Titulo:{{$livro->titulo}}</span>
                        <br>
                        <span> Autor: {{$livro->autor}} / Tipo de Livro: {{$livro->tipo}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
</body>

</html>
