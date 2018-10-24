@extends('theme.default')



@section('content')
<div class="pann"></div>
<div class="panel panel-primary">
  <div class="panel-heading">Charts</div>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['TipoCuenta', 'Total'],
          @foreach ($datas as $data)
            ['{{$data->TipoCuenta}}', {{$data->Total}}],
          @endforeach
        ]);

        var options = {
          title: 'Distribución de usuarios',
          chartArea: {left:300,top:80,width:'70%',height:'75%'},
          titleTextStyle: {color: 'black', fontName: 'Arial', fontSize: 18}
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