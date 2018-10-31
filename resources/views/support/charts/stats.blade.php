@extends('theme.default')



@section('content')
<div class="pann"></div>
<div class="panel panel-primary">
  <div class="panel-heading">Mi rendimiento</div>

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
          title: 'Rendimiento diario',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>

@endsection