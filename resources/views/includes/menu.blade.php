

<div class="panel panel-primary">
                

    <div class="panel-heading">Menu</div>

        <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">
            @if (auth()->guest())
              <li><a href="/">Bienvenido</a></li>
              <li><a href="/acciones">Acciones</a></li>
              <li><a href="/acerca-de">Creditos</a></li>
            @else
              <li><a href="/home">Dashboard</a></li>
              <li><a href="/ver-reportes">Ver reportes</a></li>
              <li><a href="/reportar">Crear reporte</a></li>

              <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  Administracion <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/usuarios">Usuarios</a></li>
                  <li><a href="/solicitud">Solicitud</a></li>
                  <li><a href="/configuracion">Configuracion</a></li>
                </ul>
              </li>


            @endif
          </ul>

          </div>

<!--             <ul class="nav nav-pills nav-stacked">
              @if (auth()->check())

              <li ><a href="#">Dashboard</a></li>
               <li ><a href="#">Ver reportes</a></li>
               <li ><a href="#">Crear reporte</a></li>
               <li ><a href="#">Administrador</a></li>
              @endif
              <li ><a href="#">Bienvenido</a></li>
               <li ><a href="#">Acciones</a></li>
               <li ><a href="#">Acerca de </a></li>

            </ul> -->

</div>






