@extends('layouts.app')



@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">arribo - scit unaj</div>
    <div class="panel panel-primary">
 
       <div class="panel-heading">Charts In Laravel 5 Using Charts Package</div>
       
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Productos', 'mes'],
              @foreach ($pastel as $pastels)
              ['{{ $pastels->name}}', {{ $pastels->venta}}],
              @endforeach
              ]);
            var options = {
              title: 'Reportes Mensual'
          };
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
      }
  </script>
</head>
<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>


</div>
@endsection