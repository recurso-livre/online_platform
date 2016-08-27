<div class="alert alert-warning" role="alert">Preencha todos os campos corretamente e confirme para continuar.</div>

<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
    
    
    <h3>Informações Pessoais</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <span class="input-group-addon">*</span>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon">*</span>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon">*</span>
                <input type="text" name="phone" class="form-control" placeholder="Telefone">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon">*</span>
                <input type="password" name="password" class="form-control" placeholder="Senha">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon">*</span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar senha">
            </div>
        </div>
    </div>
    
    <br/>
    <br/>
    <br/>
    
    <div class="divider"></div>
    
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-lg btn-primary pull-right" type="submit">Registrar</button>
        </div>
    </div>
</form>