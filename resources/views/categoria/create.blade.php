<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criar Categoria</title>
</head>
<body>
    <h1>Criar Categoria</h1>
    
    {!! Form::open(['url' => 'categoria/store']) !!}
    
    @if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    
    {!! Form::label('name') !!}<br/>
    {!! Form::text('name') !!}<br/><br/>
    
    {!! Form::label('description') !!}<br/>
    {!! Form::textarea('description') !!}<br/><br/>
    
    {!! Form::submit('Criar Categoria') !!}
    
    {!! Form::close() !!}
</body>
</html>