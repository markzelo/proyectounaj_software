@extends('theme.default')



@section('content')
<div class="pann"></div>
<div class="panel panel-primary">
  <div class="panel-heading">Graficas generales</div>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});

      //Dibujar cuando chart:drawXXXXChart este cargado
      google.charts.setOnLoadCallback(drawUsersChart);
      google.charts.setOnLoadCallback(drawIncidentsChart);
      google.charts.setOnLoadCallback(drawIncidentsStatusChart);


      function drawUsersChart() {

        var data = google.visualization.arrayToDataTable([
          ['TipoCuenta', 'Total'],
          @foreach ($datas as $data)
            ['{{$data->TipoCuenta}}', {{$data->Total}}],
          @endforeach
        ]);

        var options = {
          title: 'Distribución de usuarios',
          titleTextStyle: {color: 'black', fontName: 'Arial', fontSize: 17},
          width:500,
          height:300
        };

        var chart = new google.visualization.PieChart(document.getElementById('Users_chart_div'));

        chart.draw(data, options);
      }


      function drawIncidentsChart() {

        var data = google.visualization.arrayToDataTable([
          ['TipoCuenta', 'Total'],
          @foreach ($datos as $dato)
            ['{{$dato->TipoCuenta}}', {{$dato->Total}}],
          @endforeach
        ]);

        var options = {
          title: 'Incidentes por tipo de usuarios',
          titleTextStyle: {color: 'black', fontName: 'Arial', fontSize: 17},
          width:500,
          height:300
        };

        var chart = new google.visualization.PieChart(document.getElementById('Incidents_chart_div'));

        chart.draw(data, options);
      }


      function drawIncidentsStatusChart() {
        var data = google.visualization.arrayToDataTable([
        ['Tipo de cuenta',' En curso', 'Finalizadas'],
        @foreach ($incidents as $incident)
            ['{{$incident->TipoCuenta}}', {{$incident->TotalEnCurso}}, {{$incident->TotalFinalizada}}],
        @endforeach
      ]);

        var options = {
          title: 'Estado de las incidencias por tipo de usuario',
          titleTextStyle: {color: 'black', fontName: 'Arial', fontSize: 17},
          isStacked: true,
          width:900,
          height:300
        };

        var chart = new google.visualization.BarChart(document.getElementById('Incidents_Status_chart_div'));

        chart.draw(data, options);
      }

    </script>
  </head>
  <body>
    <div class="row">
      <div class="col-md-6">
        <div id="Users_chart_div"></div>
      </div>
      <div class="col-md-6">
        <div id="Incidents_chart_div"></div>
      </div>
      <div class="col-md-12">
        <div id="Incidents_Status_chart_div"></div>
      </div>
    </div>
  </body>
</html>

@endsection