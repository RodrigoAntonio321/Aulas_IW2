<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php



$dados = [12, 11, 9, 8, 6,7 ];

$mes = ['Janeiro', 'Fevereiro','Março','Abril','Maio','Junho'];

$tam = count($dados);



?>

<div id="piechart" style="width: 900px; height: 500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales'],

         

<?php



for($i = 0; $i < $tam; $i++){

  ?>

      ['<?= $mes[$i]; ?>', <?= $dados[$i]; ?>],



  <?php

}



?>
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


</body>
</html>