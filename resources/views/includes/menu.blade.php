

<div class="panel panel-primary">
                
      <div class="panel-heading">menu</div>

		    <div class="panel-body">
		                   
			    <ul class="nav nav-pills nav-stacked">
								  @if (auth()->check())

										  <li @if(request()->is('home')) class="active" @endif>
												<a href="/home">Panel de Usuario</a>
											</li>

														
														 @if (! auth()->user()->is_client)
														
                                                        <li class="treeview">
											              <a href="#">
											                <i class="fa fa-fw fa-database"></i> <span>Biblioteca de contenidos</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>

 														<li class="treeview">
											              <a href='/gcalendar'>
											                <i class="fa fa-fw fa-database"></i> <span>registro de eventos</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>

											            <li class="treeview">
											              <a href="#">
											                <i class="fa fa-fw fa-database"></i> <span>Analisis y Reportes</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>

											            <li class="treeview">
											              <a href='/charts'>
											                <i class="fa fa-fw fa-database"></i> <span>Graficas</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>

											            <li class="treeview">
											              <a href='/PdfDemo'>
											                <i class="fa fa-fw fa-database"></i> <span>VER EN PDF</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>

											            <li class="treeview">
											              <a href='/PdfDemo'>
											                <i class="fa fa-fw fa-database"></i> <span>visor de registro</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>

											            <li class="treeview">
											              <a href='/PdfDemo'>
											                <i class="fa fa-fw fa-database"></i> <span>control de servidor</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>




														@endif 
														 <li @if(request()->is('catalogos')) class="active" @endif>
															<a href="/productos">Catalogo de servicios </a>
														</li> 



														<li @if(request()->is('reportar')) class="active" @endif>
															<a href="/reportar">Reportar incidencia</a>
														</li>
																		 

												        @if (auth()->user()->is_admin)

													    <li role="presentation" class="dropdown">
														    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
														      ADMINISTRACION <span class="caret"></span>
														    </a>
														    <ul class="dropdown-menu">
														    	<li><a href="/usuarios">Usuarios</a></li>
															   <li><a href="/proyectos">Proyectos</a></li>
															   <li><a href="/config">CONFIGURACIO-PANEL</a></li>
															   <li class="treeview">
															   	<a href='/admin/products'>
															   		<i class="fa fa-fw fa-database"></i> <span>edicion de productos en venta</span> <i class="fa fa-angle-left pull-right"></i>
															   	</a>
															   </li>

														    </ul>
														 </li>
														@endif
												@else
													<li @if(request()->is('/')) class="active" @endif><a href="/">Bienvenido</a></li>
													<li @if(request()->is('instrucciones')) class="active" @endif><a href="/instrucciones">Instrucciones</a> </li>
													<li @if(request()->is('acerca-de')) class="active" @endif><a href="/acerca-de">Créditos</a></li>
												@endif
								  
				</ul>
		

	</div>
		         
</div>







