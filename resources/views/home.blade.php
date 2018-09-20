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
@endsection
