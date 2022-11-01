<?php
    session_start();
    error_reporting(0);
    $varsesion=$_SESSION['usuario'];
    if($varsesion == null || $varsesion = '') {
        echo "Error en la autentificacion";
        header("location:login.html");
        die();
    }
    include("cn.php");
    $pelicula = "SELECT * FROM pelicula1";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
	<link rel="stylesheet" href="css/estilos1.css">
	<title>Modificar</title>
    </head>
    
    <body>
    <div class="contenedor">
        <header>                            
            <div class="contenedor1">
                <h2 class="logotipo">Tabla de Peliculas</h2>
                <nav>
                    <h2>Bienvenido: <?php echo $_SESSION['usuario']?></h2>
                    <a href="index.php">Inicio</a>
                    <a href="insertar.php">Insertar</a>
                    <a href="#"class="activo">Modificar</a>
                    <a href="cerrar.php">Cerrar sesiòn</a>
                </nav>
            </div>
        </header>
    </div>
    <div id="main">
        <table class="tabla">
            <thead>
                <tr>
                    <!-- <th class="header_tabla">ID</th> -->
                    <th>TITULO</th>
                    <th>AUDIENCIA</th>
                    <th>PUBLICO</th>
                    <th>TIPO DE MATERIAL</th>
                    <th>DESCRIPCION</th>
                    <th>CATEGORIA</th>
                    <th>TOPOGRAFICO</th>
                    <th>TRAILER</th>
                    <th>OPERACIÔN</th>
                </tr>
            </thead>
                <?php $resultado = mysqli_query($conexion, $pelicula);        
                while($row = mysqli_fetch_assoc($resultado)) { ?> 
                <tr>
                    <!--<td class="item_tabla"><?php echo $row ["ID"] ?></td> -->
                    <td class=item_tabla><?php echo $row ["TITULO"] ?></td>
                    <td class=item_tabla><?php echo $row ["AUDENCIA"] ?></td>
                    <td class=item_tabla><?php echo $row ["PUBLICO"] ?></td>
                    <td class=item_tabla><?php echo $row ["TIPO_MATERIAL"] ?></td>
                    <td class=item_tabla><?php echo $row ["DESCRIPCION"] ?></td>
                    <td class=item_tabla><?php echo $row ["CATEGORIA"] ?></td>
                    <td class=item_tabla><?php echo $row ["TOPOGRAFICO"] ?></td>
                    <td class=item_tabla><?php echo $row ["TRAILER"] ?></td>
                    <td class=item_tabla>
                    <a href="actu.php?id=<?php echo $row ["ID"];?>" class=item_tabla_link>Editar</a>
                    <a href="eliminar.php?id=<?php echo $row ["ID"];?>" class=item_tabla_link>Eliminar</a>
                    </td>
                </tr>
                <?php } mysqli_free_result($resultado); ?>
        </table>
    </div>   
    
    </body>
</html>