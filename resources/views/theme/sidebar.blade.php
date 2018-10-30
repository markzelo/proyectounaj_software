<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">


         <!-- Logo -->
           {{--  <li>
                  <div class="logo-wrapper waves-light">
                      <a href=""><img src="images/" class="img-fluid flex-center"></a>
                  </div>
              </li>  --}}
              <!--/. Logo -->

        <ul class="nav" id="side-menu">
            @if(auth()->check())
                <li @if(request()->is('home')) class="active" @endif>
                    <a href="/home"><i class="fa fa-tachometer fa-fw"></i> Dashboard</a>
                </li>


                @if (! auth()->user()->is_client)

                    <li>
                        <li class="treeview">
                             <a href='/PdfDemo'>
                                <i class="fa fa-file-pdf-o fa-fw"></i> <span> Base de Conocimiento</span> </i>
                            </a>
                        </li>
                         <li class="treeview">
                             <a href='/youtube'>
                                <i class="fa fa-file-pdf-o fa-fw"></i> <span> Contenido multimedia</span> </i>
                            </a>
                        </li>
                        <li class="treeview">
                                <a><i class="fa fa-area-chart fa-fw"></i> Gráficas<i class="fa fa-chevron-down"></i></a>
                                <ul class="nav nav-second-level">
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/general"><i class="fa fa-pie-chart fa-fw"></i> General</a>
                                    </li> 
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/line"><i class="fa fa-line-chart fa-fw"></i> Líneas</a>
                                    </li> 
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/incidents"><i class="fa fa-bar-chart fa-fw"></i> Incidentes</a>
                                    </li>
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/table"><i class="fa fa-table fa-fw"></i> Tabla de usuarios</a>
                                    </li>
                                </ul>
                        </li>
                            <li class="treeview">
                             <a href='/gcalendar'>
                            <i class="fa fa-calendar fa-fw"></i> <span> Registro de eventos</span> </i>
                            </a>
                        </li>


                    </li>

                @endif

               <!--  lado del cliente -->

               <li>
                <a><i class="fa fa-exclamation-circle fa-fw"></i> Incidencias<i class="fa fa-chevron-down"></i></a>
                <ul class="nav nav-second-level">
                    <li @if(request()->is('reportar')) class="active" @endif>
                        <a href="/reportar"><i class="fa fa-pencil-square-o fa-fw"></i> Reportar incidencia</a>
                    </li>
                </ul>
             </li>
                
                </li>
                            <li class="treeview">
                             <a href='/gmaps'>
                            <i class="fa fa-calendar fa-fw"></i> <span> localizacion</span> </i>
                            </a>
                        </li> 



 @if ( auth()->user()->is_client)

             <li>
                <a><i class="fa fa-barcode fa-fw"></i> Sector compras<i class="fa fa-chevron-down"></i></a>
                <ul class="nav nav-second-level">
                    <li @if(request()->is('listas')) class="active" @endif>
                        <a href="/listas"><i class="fa fa-barcode"></i> Catálogo de servicios para conpra</a>
                    </li> 
                    <li @if(request()->is('listas')) class="active" @endif>
                        <a href="/carritodetalle"><i class="fa fa-cart-arrow-down"></i> detalle de carrito de compras</a>
                    </li> 
                    <li @if(request()->is('listas')) class="active" @endif>
                        <a href="/listas"><i class="fa fa-cart-plus"></i> lista de pedidos hechos</a>
                    </li> 
                </ul>

            </li>


               @endif


                <!-- admin -->
                
                @if (auth()->user()->is_admin)

                    <li>
                        <a href="#"><i class="fa fa-cogs fa-fw"></i> Administrar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/usuarios"><i class="fa fa-users fa-fw"></i> Usuarios</a>
                            </li>
                            <li>
                                <a href="/proyectos"><i class="fa fa-folder fa-fw"></i> Proyectos</a>
                            </li>
                            <li>
                                <a href="/youtube"><i class="fa fa-eye fa-fw"></i> Administración</a>
                            </li>
                            <li class="treeview">
                                <a href='/admin/products'>
                                    <i class="fa fa-fw fa-database"></i> <span> Edicion de productos en venta</span> 
                                </a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                @endif
            @else
                <li @if(request()->is('/')) class="active" @endif><a href="/"><i class="fa fa-home fa-fw"></i> Bienvenido</a></li>
				<li @if(request()->is('instrucciones')) class="active" @endif><a href="/instrucciones"><i class="fa fa-pencil-square-o fa-fw"></i> Instrucciones</a> </li>
				<li @if(request()->is('acerca-de')) class="active" @endif><a href="/acerca-de"><i class="fa fa-info-circle fa-fw""></i> Créditos</a></li>
            @endif
        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->