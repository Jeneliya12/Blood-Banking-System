@extends('layouts.master')
@section('title')
Charts
@endsection
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body><br><br>
  <div class="container">
    <div class="row">
        <h1 class="text-3xl font-bold">Percentage of various age groups who donated blood</h1><br>
        <div id="pie_chart" class="col-xl-12 col-md-12 col-sm-12" style="width:1000px; height:500px; position:center">
        </div>
  </div>
</div>
  
  <script type="text/javascript">

   var analytics = <?php echo $age; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Percentage of various age groups who donted blood'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>
</body>
</html>
@endsection
