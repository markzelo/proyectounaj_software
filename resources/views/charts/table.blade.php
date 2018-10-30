@extends('theme.default')



@section('content')
<div class="pann"></div>
<div class="panel panel-primary">
  <div class="panel-heading">Tabla de usuarios</div>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Usuario');
        data.addColumn('string', 'Tipo de cuenta');
        data.addColumn('string', 'Proyecto asignado');
        data.addColumn('string', 'Descripción del proyecto');
        data.addRows([
          @foreach ($datos as $dato)
            ['{{$dato->Usuario}}','{{$dato->TipoCuenta}}', '{{$dato->Proyecto}}', '{{$dato->Descripcion}}'],
          @endforeach
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
  </head>
  <body>
    <div id="table_div"></div>
  </body>
</html>



@endsection