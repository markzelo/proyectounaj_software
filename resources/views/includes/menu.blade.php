

<div class="panel panel-primary">
  <div class="panel-heading">Menu</div>
        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            @if (auth()->guest())
              <li @if(request()->is('/')) class="active" @endif><a href="/">Bienvenido</a></li>
              <li @if(request()->is('instrucciones')) class="active" @endif ><a href="/instrucciones">Instrucciones</a></li>
              <li @if(request()->is('acerca-de')) class="active" @endif><a href="/acerca-de">Acerca de</a></li>
            @else
              <li @if(request()->is('home')) class="active" @endif><a href="/home">Dashboard</a></li>
              <li><a href="/ver-reportes">Ver reportes</a></li>
              <li @if(request()->is('reportar')) class="active" @endif><a href="/reportar">Crear reporte</a></li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Administracion <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/usuarios">Usuarios</a></li>
                  <li><a href="/solicitud">Proyectos</a></li>
                  <li><a href="/configuracion">Configuracion</a></li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
</div>







