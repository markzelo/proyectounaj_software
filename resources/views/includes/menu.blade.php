<div class="panel panel-primary">
                
      <div class="panel-heading">menu</div>

		    <div class="panel-body">
		                   
			    <ul class="nav nav-pills nav-stacked">
								  @if (auth()->check())

										  <li @if(request()->is('home')) class="active" @endif>
												<a href="/home">Dashboard</a>
											</li>

														
														 @if (! auth()->user()->is_client)
														 <li class="treeview">
											              <a href="#">
											                <i class="fa fa-fw fa-database"></i> <span>REPORTES</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											              <ul class="treeview-menu">
											                <li class="active"><a href="/reportes" onclick="cargarlistado(3,1);" ><i class="fa fa-circle-o"></i> Reportes </a></li>
											                
											              </ul>
											            </li>  
											             <li><a><i class="fa fa-users"></i> User <span class="fa fa-chevron-down"></span></a>
										                    <ul class="nav child_menu">
										                      <li><a href="/veruser">Consultar Usuarios</a></li>
										                      
										                    </ul>
										                  </li>

                                                        <li class="treeview">
											              <a href="#">
											                <i class="fa fa-fw fa-database"></i> <span>contenidos de librerias</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											        </li>

 														<li class="treeview">
											              <a href="#">
											                <i class="fa fa-fw fa-database"></i> <span>eventos</span> <i class="fa fa-angle-left pull-right"></i>
											              </a>
											            </li>



														@endif 
														 <li @if(request()->is('reportar')) class="active" @endif>
															<a href="/productos">Catlogo de servicios exclusivos</a>
														</li> 



														<li @if(request()->is('reportar')) class="active" @endif>
															<a href="/reportar">Reportar incidencia</a>
														</li>
														<li @if(request()->is('reportar')) class="active" @endif>
															<a href="/reportar">contenidos</a>
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







