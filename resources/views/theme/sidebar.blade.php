<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">
            @if(auth()->check())
                <li>
                    <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>

                <li>
                    <!-- Definir vista -->
                    <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Ver incidencias</a>
                </li>

                <li>
                    <!-- Definir vista -->
                    <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Reportar incidencia</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-cogs fa-fw"></i> Administrar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-folder fa-fw"></i>Proyectos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-eye fa-fw"></i>Administración</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            @else
                <li>
                    <!-- Definir vista -->
                    <a href="#"><i class="fa fa-dashboard fa-fw"></i> Bienvenido</a>

                </li>

                <li>
                    <!-- Definir vista -->
                    <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i>Instrucciones</a>
                </li>
            @endif
        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->