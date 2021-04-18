<?php
  $con = mysqli_connect("localhost","root","","bidding_db");
  if($con){
    echo "";
  }
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['product_id', 'bid_amount'],
          ['Apples',1],
          ['Spinach',2],
          ['Cabbage',3  ],
          ['G8ra',4],

         
         <?php
          $sql = 'SELECT product_id, max(bid_amount) as ma  FROM `bids` group by product_id';
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['product_id']."',".$result['ma']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Visualization'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 500px; height: 500px; align-self: center;"></div>
  </body>
</html>