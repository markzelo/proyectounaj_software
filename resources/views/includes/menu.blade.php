


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
				<a href="/productos">Productos</a>
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


<nav >
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="/home">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
          Dashboard <span class="sr-only">(current)</span>
        </a>
	  </li>
	</div>
</nav>
