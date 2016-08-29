<div class="alert alert-warning" role="alert">Preencha todos os campos corretamente e confirme para continuar.</div>
    
{!! Form::open(['url'=>'/recurso/store', 'id'=>'create-resource']) !!}

    <input id="uri-resources" type="hidden" name="uriResources">

      <h3>Informações</h3>
      <div class="row">
          <div class="col-md-8">
              <div class="input-group">
                  <span class="input-group-addon">*</span>
                  {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nome']) !!}
              </div>
          </div>
          <div class="col-md-4">
              <div class="input-group">
                  <span class="input-group-addon">*</span>
                  {!! Form::select('category_id', $categories, null, array('class' => 'form-control')) !!}
              </div>
          </div>
      </div>
  
      <div class="row">
          <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#technical">Informação Técnica</a></li>
                <li><a data-toggle="tab" href="#informal">Informação Livre</a></li>
              </ul>
  
              <div class="tab-content">
                <div id="technical" class="tab-pane fade in active">
                  {!! Form::textarea('technicalDescription', null, [
                    'class'=>'form-control margin-tb-20', 
                    'placeholder'=>'Informação Técnica', 
                    'rows'=>'15'
                  ]) !!}
                </div>
                <div id="informal" class="tab-pane fade">
                  {!! Form::textarea('informalDescription', null, [
                    'class'=>'form-control margin-tb-20', 
                    'placeholder'=>'Informação Livre', 
                    'rows'=>'15'
                  ]) !!}
                </div>
              </div>
          </div>
      </div>
  
      <div class="row">
  	    <div class="col-md-12">
  	        <div class="resource-image-table">
  	            <div class="row">
  	                <input id="image-placeholder" type="hidden" value="{{ asset('img/add-photo.png') }}">
  	                @for($count = 1; $count <= 4; $count++)
      	                <div class="col-md-2 col-sm-4">
      	                  <div class="image-fit opacity-hover">
        	                   <img id="link-photo{{ $count }}"
        	                        src="{{ asset('img/add-photo.png') }}"
        	                        alt="photo-{{ $count }}"
        	                        class="img-modal img-responsive">
      	                   </div>
      	                </div>
  	                @endfor
  	                
  	                <input id="video-placeholder" type="hidden" value="{{ asset('img/add-video.png') }}">
  	                @for($count = 1; $count <= 2; $count++)
      	                <div class="col-md-2 col-sm-4">
      	                    <div class="image-fit opacity-hover">
        	                    <img id="link-video{{ $count }}"
        	                         src="{{ asset('img/add-video.png') }}"
        	                         alt="video-{{ $count }}"
        	                         class="img-modal img-responsive">
      	                     </div>
      	                </div>
  	                @endfor
  	            </div>
  	        </div>
  	    </div>
  	</div>
  
    <br/>
    <br/>
    <br/>
  
    <div class="divider"></div>
  
    <div class="row">
        <div class="col-md-12">
            {!! Form::submit('Cadastrar', ['class'=>'btn btn-lg btn-primary pull-right']) !!}
        </div>
    </div>
    
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