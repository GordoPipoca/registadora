<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
     <?php include('Componentes/grafico1.php')?>
     <?php include('Componentes/grafico2.php')?>
     <?php include('Componentes/grafico3.php')?>
    <title>Registrer</title>
</head>
<body>
    <header>
        <div id="emprelogo">
            <h1>Farinha</h1>
        </div>
        <nav id="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="estadisticas.php">ESTADISTICAS</a></li>
                <li><a href="#">ADMIN</a></li>
            </ul>
        </nav>  
    </header>
<section id="ventas_totales">
    <div id="contenedor_grafico">
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  
    </div>
    <?php
        include("componentes/Recursos.php");
        $preciototal = 0;
        $mostrarprod= $history->listar_todo();
        for($i=0;$i<count($mostrarprod); $i++){
            $preciototal = $preciototal + $mostrarprod[$i]['pago'];
        }
        
        ?>
    <div id="contenedor_ingreso">
        <h2> Dinero total generado: $ <?php echo $preciototal; ?></h2>
    </div>
</section >
<section id="ventas_por_dias">
    <div>    
    <div id='polynomial2_div' style='width: 900px; height: 500px;'></div>
    </div>
    <div id="chart_div" style="width: 30%; height: 400px;"></div>
</section>
 
</body>
</html>