<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body class="bg-light">
        <div class="container  ">
            @if ($errors->any())
                <div class="row d-flex justify-content-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row d-flex justify-content-center mt-5">
                <form method="POST" action="{{ url('/task')}}" >
                    <div class="form-group text-center">
                        @csrf
                        <p>Cadastro de Task:</p>
                        <input class="form-control mt-1" name="task" id="task" type="text" placeholder="Nome da tarefa">
                        <input class="form-control mt-1" name="category" id="category" type="text" placeholder="Informe da categoria">
                        <input class="btn btn-primary mt-1" type="submit" value="Salvar" class="link">
                    </div>
                </form>
            </div>

            <div class="row text-center">
                <h4 class="col-12">Registros:</h4>
                @foreach ($tasks as $t)
                    <p class="col-12" style="text-decoration: {{$t->status}};"> {{$t->id}} - {{$t->task}} </p>
                @endforeach
            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
