@extends('theme.default')

@section('content')
<<<<<<< HEAD

            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    @if(auth()->user()->is_support)

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">reportadas a mi </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Categoría</th>
                                        <th>Severidad</th>
                                        <th>Estado</th>
                                        <th>Fecha de creación</th>
                                        <th>Titulo</th>
                                    </tr>
                                </thead>

                                <tbody id="dashboard_my_incidents">
                                    @foreach ($my_incidents as $incident)
                                        <tr>
                                            <td>
                                                <a href="/ver/{{ $incident->id }}">
                                                    {{ $incident->id }}
                                                </a>
                                            </td>
                                            <td>{{ $incident->category->name}}</td>
                                            <td>{{ $incident->severity_full }}</td>
                                            <td>{{ $incident->state }}</td>
                                            <td>{{ $incident->created_at }}</td>
                                            <td>{{ $incident->title_short }}</td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Incidencias sin asignacion</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Categoría</th>
                                        <th>Severidad</th>
                                        <th>Estado</th>
                                        <th>Fecha de creación</th>
                                        <th>Título</th>
                                        <th>Opcion</th>
                                    </tr>
                                </thead>
                                <tbody id="dashboard_pending_incidents">
                                    @foreach ($pending_incidents as $incident)
                                        <tr>
                                            <td>
                                                <a href="/ver/{{ $incident->id }}">
                                                    {{ $incident->id }}
                                                </a>
                                            </td>
                                            <td>{{ $incident->category->name}}</td>
                                            <td>{{ $incident->severity_full }}</td>
                                            <td>{{ $incident->state }}</td>
                                            <td>{{ $incident->created_at }}</td>
                                            <td>{{ $incident->title_short }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">
                                                    Atender
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @endif

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Reportes de Incidencias hechos por mi</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Categoría</th>
                                        <th>Severidad</th>
                                        <th>Estado</th>
                                        <th>Fecha de creación</th>
                                        <th>Título</th>
                                        <th>Responsable</th>
                                    </tr>
                                </thead>
                                <tbody id="dashboard_by_me">
                                    @foreach ($incidents_by_me as $incident)
                                        <tr>
                                            <td>
                                                <a href="/ver/{{ $incident->id }}">
                                                    {{ $incident->id }}
                                                </a>
                                            </td>
                                            <td>{{ $incident->category_name}}</td>
                                            <td>{{ $incident->severity_full }}</td>
                                            <td>{{ $incident->state }}</td>
                                            <td>{{ $incident->created_at }}</td>
                                            <td>{{ $incident->title_short }}</td>
                                            <td>
                                                {{ $incident->support_id ?:"sin asignacion" }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>





                </div>
            </div>
       
=======
<div class="pann">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Dashboard</div>
			<table class="table table-striped table-bordered">
		    <thead>
		      <tr>
		        <th>Codigo</th>
		        <th>Categoria</th>
		        <th>Severidad</th>
		        <th>Estado</th>
		        <th>Fecha de creacion</th>
		        <th>Titulo</th>
		        <th>Responsable</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<td>cod</td>
		    	<td>cat</td>
		    	<td>sev</td>
		    	<td>est</td>
		    	<td>fec</td>
		    	<td>tit</td>
		    	<td>res</td>
		    </tbody>
		  </table>
		</div>
		<!-- /.panel-body -->
	</div>
</div>
>>>>>>> rama_agustin
@endsection
