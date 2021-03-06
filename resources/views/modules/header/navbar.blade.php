<nav class="navbar navbar-default rl-navbar rl-fixed-navbar rl-shadow-1">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img class="rl-logo" src="{{ asset('assets/img/logo/rl-logo-white.png') }}"></img></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <form id="search-form" class="navbar-form navbar-left">
          <div class="input-group navbar-search">
            <input id="search-query" type="text" class="form-control" placeholder="Procurar...">
            <span class="input-group-btn">
              <button id="search-btn" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </span>
          </div><!-- /input-group -->
        </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="rl-navbar-btn" href="/login">Acessar&nbsp;&nbsp;<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
        <li><a class="rl-navbar-btn" href="/usuario/cadastrar">Cadastrar&nbsp;&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="rl-fixed-navbar-space"></div>