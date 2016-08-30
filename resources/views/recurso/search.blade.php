<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisa de Recursos</title>
</head>
<body>
    <h1>Pesquisa de Recursos</h1>

    {{ Form::open(['method' => 'get', 'url' => route('guest.resource.search')]) }}

    {{ Form::text('searchField') }}
    {{ Form::submit('Pesquisar') }}

    {{ Form::close() }}
</body>
</html>