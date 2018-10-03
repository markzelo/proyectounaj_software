<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">


         <!-- Logo -->
             {{--  <li>
                  <div class="logo-wrapper waves-light">
                      <a href=""><img src="" class="img-fluid flex-center"></a>
                  </div>
              </li> --}}
              <!--/. Logo -->

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
                            
                            <li class="treeview">
                                  <a href="#">
                                    <i class="fa fa-book"></i> <span> Biblioteca de contenidos</span> <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            </li>

                            <li class="treeview">
                              <a href="#">
                                <i class="fa fa-fw fa-database"></i> <span> Analisis y Reportes</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>

                       
                        <li class="treeview">
                             <a href='/PdfDemo'>
                                <i class="fa fa-file-pdf-o"></i> <span> Exportar a PDF</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>
                        <li class="treeview">
                                <a><i class="fa fa-area-chart"></i> Gráficas<i class="fa fa-chevron-down"></i></a>
                                <ul class="nav nav-second-level">
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/pie"><i class="fa fa-pie-chart"></i> Circular</a>
                                    </li> 
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/line"><i class="fa fa-line-chart"></i> Líneas</a>
                                    </li> 
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/bar"><i class="fa fa-bar-chart"></i> Barras</a>
                                    </li>
                                    <li @if(request()->is('charts')) class="active" @endif>
                                        <a href="/area"><i class="fa fa-area-chart"></i> Área</a>
                                    </li>
                                </ul>
                        </li>
                            <li class="treeview">
                             <a href='/gcalendar'>
                            <i class="fa fa-calendar"></i> <span> Registro de eventos</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>


                    </li>

                @endif

               <!--  lado del cliente -->

               <li>
                <a><i class="fa fa-exclamation-circle"></i> Incidencias<i class="fa fa-chevron-down"></i></a>
                <ul class="nav nav-second-level">
                    <li @if(request()->is('reportar')) class="active" @endif>
                        <a href="/reportar"><i class="fa fa-pencil-square-o fa-fw"></i> Reportar incidencia</a>
                    </li>
                </ul>
             </li>

             <li>
                <a><i class="fa fa-barcode"></i> Sector compras<i class="fa fa-chevron-down"></i></a>
                <ul class="nav nav-second-level">
                    <li @if(request()->is('listas')) class="active" @endif>
                        <a href="/listas"><i class="fa fa-barcode"></i> Catálogo de servicios para conpra</a>
                    </li> 
                    <li @if(request()->is('listas')) class="active" @endif>
                        <a href="/listas"><i class="fa fa-cart-arrow-down"></i> lista de pedidos</a>
                    </li> 
                    <li @if(request()->is('listas')) class="active" @endif>
                        <a href="/listas"><i class="fa fa-cart-plus"></i> mi carrito de compra</a>
                    </li> 
                </ul>

                 </li>


              


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
                                <a href="/config"><i class="fa fa-eye fa-fw"></i> Administración</a>
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
                <li @if(request()->is('/')) class="active" @endif><a href="/"><i class="fa fa-dashboard fa-fw"></i> Bienvenido</a></li>
				<li @if(request()->is('instrucciones')) class="active" @endif><a href="/instrucciones"><i class="fa fa-pencil-square-o fa-fw"></i> Instrucciones</a> </li>
				<li @if(request()->is('acerca-de')) class="active" @endif><a href="/acerca-de"><i class="fa fa-info-circle""></i> Créditos</a></li>
            @endif
        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->