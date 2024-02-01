<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          <?php
            include("Componentes/conectar.php"); 
            $SQL= "SELECT * FROM historial GROUP BY fecha";
            $consulta = mysqli_query($conectar,$SQL);
            while($row = mysqli_fetch_assoc($consulta)){
                echo "['".$row['fecha']."',".$row['pago']."],";
            }         
          ?>
        ]);

        var options = {
          title: 'Desempeño de la empresa',
          hAxis: {title: 'ventas',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>