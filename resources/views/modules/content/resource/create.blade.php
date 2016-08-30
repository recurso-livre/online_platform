<div class="alert alert-warning" role="alert">Preencha todos os campos corretamente e confirme para continuar.</div>

{!! Form::open(['url'=>'/api/recurso/cadastrar']) !!}
    
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

<!-- Modal -->
<div class="modal fade" id="insert-link" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Adicionar link</h4>
      </div>
      <div class="modal-body">
        <label>Adicione a url da imagem do recurso</label>
        <input type="text" id="modal-url" class="form-control" placeholder="URL" />
      </div>
      <div class="modal-footer">
        <button type="button" id="modal-btn" class="btn btn-primary">Salvar link</button>
      </div>
    </div>
  </div>
</div>