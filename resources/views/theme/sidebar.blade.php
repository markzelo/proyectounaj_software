<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">
            @if(auth()->check())
                <li @if(request()->is('home')) class="active" @endif>
                    <a href="/home"><i class="fa fa-tachometer"></i> Dashboard</a>
                </li>


                @if (! auth()->user()->is_client)

                    <li>

                        <li>
                            <a><i class="fa fa-database"></i> Reportes<i class="fa fa-chevron-down"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/reportes" onclick="cargarlistado(3,1);" ><i class="fa fa-wrench"></i> Reportes</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a><i class="fa fa-users"></i> Users<i class="fa fa-chevron-down"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/verusuarios"><i class="fa fa-users fa-fw"></i> Consultar usuarios</a>
                                </li>
                            </ul>
                        </li>

                       
                        <li class="treeview">
                             <a href='/PdfDemo'>
                                <i class="fa fa-book"></i> <span>VER EN PDF</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href='/charts'>
                            <i class="fa fa-fw fa-database"></i> <span>Graficas</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>
                            <li class="treeview">
                             <a href='/gcalendar'>
                            <i class="fa fa-random"></i> <span>registro de eventos</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>

                    </li>

                @endif

               <!--  lado del cliente -->

                <li>
                    <a><i class="fa fa-quote-right"></i> Incidencias<i class="fa fa-chevron-down"></i></a>
                    <ul class="nav nav-second-level">
                        <li @if(request()->is('reportar')) class="active" @endif>
                            <a href="/reportar"><i class="fa fa-pencil-square-o fa-fw"></i> Reportar incidencia</a>
                        </li>

                        <li @if(request()->is('reportar')) class="active" @endif>
                            <a href="/reportar"><i class="fa fa-search"></i> Contenidos</a>
                        </li>
                    </ul>
                </li>


                <li @if(request()->is('reportar')) class="active" @endif>
					<a href="/productos"><i class="fa fa-barcode"></i> Catalogo de servicios</a>
				</li> 

                <!-- admin -->
                
                @if (auth()->user()->is_admin)

                    <li>
                        <a href="#"><i class="fa fa-cogs fa-fw"></i> Administrar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/usuarios"><i class="fa fa-users fa-fw"></i>Usuarios</a>
                            </li>
                            <li>
                                <a href="/proyectos"><i class="fa fa-folder fa-fw"></i>Proyectos</a>
                            </li>
                            <li>
                                <a href="/config"><i class="fa fa-eye fa-fw"></i>Administración</a>
                            </li>
                            <li class="treeview">
                                <a href='/admin/products'>
                                    <i class="fa fa-fw fa-database"></i> <span>edicion de productos en venta</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                @endif
            @else
                <li @if(request()->is('/')) class="active" @endif><a href="/"><i class="fa fa-dashboard fa-fw"></i> Bienvenido</a></li>
				<li @if(request()->is('instrucciones')) class="active" @endif><a href="/instrucciones"><i class="fa fa-pencil-square-o fa-fw"></i> Instrucciones</a> </li>
				<li @if(request()->is('acerca-de')) class="active" @endif><a href="/acerca-de">Créditos</a></li>
            @endif
        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->