<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Criação de Recurso</title>
</head>
<body>
    <h1>Criação de Recurso</h1>
    
    {!! Form::open(['url'=>'recurso/store']) !!}
    
    @if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    
    {!! Form::label('name: ') !!}<br/>
    {!! Form::text('name') !!}<br/><br/>
    
    {!! Form::label('technicalDescription: ') !!}<br/>
    {!! Form::text('technicalDescription') !!}<br/><br/>
    
    {!! Form::label('informalDescription: ') !!}<br/>
    {!! Form::text('informalDescription') !!}<br/><br/>
    
    {!! Form::label('uriResources: ') !!}<br/>
    {!! Form::textarea('uriResources') !!}<br/><br/>
    
    {!! Form::label('Category') !!}<br/>
    {!! Form::select('category_id', $categories) !!}<br/><br/>
    
    {!! Form::submit('Criar Recurso') !!}
    
    {!! Form::close() !!}
    
</body>
</html>