
<nav class="navbar navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a href="{{ route('admin.principal') }}" class="navbar-brand"><b>PH4sys</b>MED</a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>
    <!-- Authentication Links -->
    @if (Auth::guest())
     
      <ul class="nav navbar-nav">
        <a class="navbar-brand"><b></b></a>
      </ul>

    @else
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      
      <ul class="nav navbar-nav">
        <li><a>&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Principal <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('admin.pacientes') }}">Pacientes</a></li>
            
            <li class="divider"></li>
            <li><a href="{{ route('admin.pacientes.agendar') }}">Agenda</a></li>

            <li class="divider"></li>
            <li><a href="#">Relatórios</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Administração <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('admin.usuarios') }}">Usuários</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('admin.convenios') }}">Convênios</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('admin.profissoes') }}">Profissões</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('admin.classes') }}">Classe Paciente</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('admin.status') }}">Status Paciente</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('admin.cidades') }}">Cidades</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('admin.bairros') }}">Bairros</a></li>
            <li class="divider"></li>
            <li><a href="{{ route('admin.estados') }}">Estados</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
    <!-- /.navbar-collapse -->
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar -->
              <img src=" {{ asset('lib/admin-lte/dist/img/user2-160x160.jpg') }} " class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src=" {{ asset('lib/admin-lte/dist/img/user2-160x160.jpg') }} " class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>{{ Auth::user()->email }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull" align="center">
                <a href="{{ route('admin.login.sair') }}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    @endif
    <!-- /.navbar-custom-menu -->
  </div>
  <!-- /.container-fluid -->
</nav>