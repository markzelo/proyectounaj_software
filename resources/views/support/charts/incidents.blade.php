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
        ['Estado','Total'],
        @foreach ($datos as $dato)
            ['{{$dato->Estado}}',{{$dato->Total}}],
        @endforeach
      ]);


        var options = {
          title: 'Estado de las incidencias reportadas a mi',
          legend: {position:"labeled"}
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>






@endsection