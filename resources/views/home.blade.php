@extends('theme.default')

@section('content')
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
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      	<td>Cod</td>
		      	<td>Cat</td>
		      	<td>Sev</td>
		      	<td>Est</td>
		      	<td>Fec</td>
		      	<td>Tit</td>
		      </tr>
		    </tbody>
		  </table>
		</div>
		<!-- /.panel-body -->
	</div>
</div>
@endsection
