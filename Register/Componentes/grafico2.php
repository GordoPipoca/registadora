<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
     google.charts.load("current", {packages:["corechart"]});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ['Age', 'Weight'],
         <?php
            include("Componentes/conectar.php"); 
            $SQL= "SELECT * FROM historial GROUP BY fecha DESC LIMIT 30";
            $consulta = mysqli_query($conectar,$SQL);
            while($row = mysqli_fetch_assoc($consulta)){
                echo "['".$row['fecha']."',".$row['pago']."],";
            }         
          ?>
       ]);

       var options = {
         title: 'Ultimos 30 dias',
         legend: 'none',
         crosshair: { trigger: 'both', orientation: 'both' },
         trendlines: {
           0: {
             type: 'polynomial',
             degree: 3,
             visibleInLegend: true,
             backgroundColor:'#E4E5EA',
                  }
         }
       };

       var chart = new google.visualization.ScatterChart(document.getElementById('polynomial2_div'));
       chart.draw(data, options);
     }
   </script>