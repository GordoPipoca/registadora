<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
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
          title: 'Ventas Totales',
          backgroundColor: '#E4E5EA',
          is3D: true,

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>