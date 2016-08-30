<div class="alert alert-warning" role="alert">Preencha todos os campos corretamente e confirme para continuar.</div>

<form class="form-horizontal" role="form" method="POST" action="{{ url(PAGINA AQUI) }}">
    <h3>Endereço</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="text" class="form-control" placeholder="Cidade">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="text" class="form-control" placeholder="Estado">
            </div>
        </div>
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="text" class="form-control" placeholder="CEP">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="text" class="form-control" placeholder="Bairro">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="text" class="form-control" placeholder="Complemento">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-10">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="text" class="form-control" placeholder="Rua">
            </div>
        </div>
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                <input type="number" class="form-control" placeholder="Número">
            </div>
        </div>
    </div>
    
    <br/>
    <br/>
    <br/>
    
    <div class="divider"></div>
    
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-lg btn-primary pull-right" type="submit">Confirmar</button>
        </div>
    </div>
</form>