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
    $id = $_GET["id"];
    $pelicula = "SELECT * FROM pelicula1 WHERE ID = '$id'";
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
	<link rel="stylesheet" href="css/1.css">
	<title>Actualizar</title>
    </head>
    <body>
            <div class="contenedor">
                <header>                            
                    <div class="contenedor1">
                                <h2 class="logotipo">Películas-Modificar</h2>
                                <nav>
                                    <h2>Bienvenido: <?php echo $_SESSION['usuario']?></h2>
                                    <a href="index.php">Inicio</a>
                                    <a href="modificar1.php">Modificar</a>
                                    <a href="#" class="activo">Actualizar</a>
                                    <a href="cerrar.php">Cerrar sesiòn</a>
                                </nav>
                    </div>
            <div class="contact-wrapper animated bounceInUp">
                <div class="form">  
                    <form  action="boton_actualizar.php" method="post" enctype="multipart/form-data">
                        
                        <?php $resultado = mysqli_query($conexion, $pelicula);        
                            while($row = mysqli_fetch_assoc($resultado)) { ?>
                         
                        
                        <input type="hidden" class="input_tabla" value="<?php echo $row ["ID"] ?>" name="id">
                       
                        <p>
                            <label>TÍTULO</label>
                            <input type="text" class="input_tabla" value="<?php echo $row ["TITULO"] ?>" name="TITULO">
                        </p>
                        <p>
                            <label>AUDENCIA</label>
                            <input type="text" class="input_tabla" value="<?php echo $row ["AUDENCIA"] ?>" name="AUDENCIA">
                        </p>
                        <p>
                            <label>PÚBLICO</label>
                            <input type="text" class="input_tabla" value="<?php echo $row ["PUBLICO"] ?>" name="PUBLICO">
                        </p>
                        <p>
                            <label>TIPO DE MATERIAL</label>
                            <input type="text" class="input_tabla" value="<?php echo $row ["TIPO_MATERIAL"] ?>" name="TIPO_MATERIAL">
                        </p>
                        <p>
                            <label>CATEGORÍA</label>
                            <select name="CATEGORIA">
                                <option value="<?php echo $row ["CATEGORIA"] ?>" disable=""><?php echo $row ["CATEGORIA"] ?></option>
                                <option>otros</option>
                                <option>acción</option>
                                <option>terror</option>
                                <option>anime</option>
                                <option>infantil</option>
                                <option>drama</option>
                                <option>comedia</option>
                                <option>musical</option>
                                <option>suspenso</option>
                                <option>ficción</option>
                                <option>romance</option>
                            </select>
                            <!-- <input type="text" class="input_tabla" value="<?php echo $row ["CATEGORIA"] ?>" name="CATEGORIA">  -->
                        </p>
                        <p>
                            <label>TOPOGRÁFICO</label>
                            <input disable type="text" class="input_tabla" value="<?php echo $row ["TOPOGRAFICO"] ?>" name="TOPOGRAFICO" >
                            <!-- <label class="hi"  name="TOPOGRAFICO" value="TOPOGRAFICO"><?php echo $row ["TOPOGRAFICO"] ?></label> -->
                        </p>
                        <p>
                            <label>TRÁILER</label>
                            <input type="text" class="input_tabla" value="<?php echo $row ["TRAILER"] ?>" name="TRAILER" >
                        </p>
                        <p class="check">
                            <label class="check"><input class="check"  type="checkbox" class="input_tabla" value="1" name="RECOMENDADO" >RECOMENDADO :</label>
                        </p>
                        <p class="block">
                            <label>DESCRIPCIÓN</label>
                            <textarea class="input_tabla" value="" name="DESCRIPCION" rows="7"><?php echo $row ["DESCRIPCION"] ?></textarea>
                        </p>

                        <!--<p class="block">  -->                              
                            <div class="img">
                                    <img src="img/<?php echo $row ["TOPOGRAFICO"]?>.jpg" loading="lazy" alt="<?php echo $row ["TOPOGRAFICO"]?>" id="upload-img">
                            </div> 
                                                        
                            
                        <div  class="cargar_img">   
                                <label class="cargar_imagen" for="IMG">CARGAR IMAGÉN</label>
                                <input type="file" name="IMG" accept="image/jpeg" id="IMG">
                        </div>
                        <!--</p>  --> 

                        <p class="block">
                            <button>
                                Actualizar
                            </button>
                         </p>
                        
                        <?php } mysqli_free_result($resultado)?>
                        
                    </form>
                </div>
            </div>
                </header> 
            </div>




    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main2.js"></script>
    </body>
</html>