@extends('theme.default')



@section('content')
<div class="pann"></div>
<div class="panel panel-primary">
  <div class="panel-heading">Incidencias</div>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'En curso', 'Finalizada'],
          @foreach ($datos as $dato)
            ['{{$dato->Dia}}', {{$dato->TotalEnCurso}}, {{$dato->TotalFinalizada}}],
          @endforeach
        ]);

        var options = {
          title: 'Mis incidencias en curso/finalizadas por dia',
          titleTextStyle: {color: 'black', fontName: 'Arial', fontSize: 17},
          isStacked: true,
          width:900,
          height:300
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="row">
      <div class="col-md-9">
        <div id="columnchart_material"></div>
      </div>
    </div>
  </body>
</html>





@endsection