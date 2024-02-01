<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <section id="s1">
        <div id="cargar">
            <div class="Tittle">
                <h2>Cargar productos</h2>
            </div>
            <form method="POST" id="form" action="introducirProducto.php">
                <label for="producto" class="labelsinp">Nombre del Producto</label>
                <input type="text" class="inputs" name="producto"placeholder="Nombre del producto" required>
                <label for="precio" class="labelsinp">Precio del producto</label>
                <input type="number" class="inputs" placeholder="00000" name="precio" required>
                <button type="submit" class="btn" id="cargarbtn">Cargar</button>
            </form>
        </div>
        <div id="carrito">
            <div>
                <div class="Tittle">
                    <h2>Carrito</h2>
                </div>
                    <div id="contenedor_carrito">
                                            <!--Esto contiene la tabla -->
                        <table id="Ccarrito">
                        <tr>
                        <th class="Table" id="D">Dia</th>
                        <th class="Table"id="P">Producto</th>
                        <th class="Table"id="PR">Precio</th>
                        </tr>
                        <?php
                        include("componentes/Recursos.php");
                        $preciototal = 0;
                        $mostrarprod= $compra->listar_productos();
                        for($i=0;$i<count($mostrarprod); $i++){
                            $preciototal = $preciototal + $mostrarprod[$i]['precio'];
                        ?>
                        <tr>
                        <td class="Table"><?php echo $mostrarprod[$i]['fecha'] ?></td>
                        <td class="Table"><?php echo $mostrarprod[$i]['producto'] ?></td>
                        <td class="Table">$ <?php echo $mostrarprod[$i]['precio'] ?></td>
                        <td class="Table"><a href="Componentes/EliminarProd.php?idc=<?php echo $mostrarprod[$i]['id_compra'] ?>">Eliminar</a></td>
                        </tr>
                        <?php }  ?>
                        </table>  
                        <div id="contenedor-pagototal">
                        <h3 id="Totalpago">Total: $ <?php echo $preciototal ;?></h3> 
                        </div>
                    </div>
                    
                    <form action="IntroducirHistorial.php?monto=<?php echo $preciototal ;?>" method="POST">
                    <button type="submit" class="btn" id="cobrarbtn">cobrar</button>
                    </form>
            </div>
        </div>
        <div id="historial">
            <div>
                <div class="Tittle">
                    <h2>Historial</h2>
                </div>
                <div id="contenedor_historial">
                <table id="Hhistorial">

                    <tr>
                        <th class="Table" id="fechat">fecha</th>
                        <th class="Table" id="montot">monto</th>
                    </tr>
                    <?php
                    #Solo muestra las ultimas 14 transacciones por cuestion de comodidad
                    $mostrarhistorial = $history->listar_historial();
                    for($i=0;$i<count($mostrarhistorial); $i++){
                    ?>
                    <tr>
                        <td class="Table"><?php echo $mostrarhistorial[$i]['fecha'] ?></td>
                        <td class="Table"> $ <?php echo $mostrarhistorial[$i]['pago']?></td>
                    </tr>
                    <?php } ?>

                </table>


            </div>
        </div>
    </section>
    <footer></footer>
    
</body>
</html>