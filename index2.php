<?php
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
	<link rel="stylesheet" href="estilos.css">
	<title>Peliculas-BiblioMovies</title>
</head>
<body>
	
	<div class="contenedor">
    
		<header>
			
            <div class="contenedor1">
                <h2 class="logotipo">Películas</h2>
                
                <nav> 
                    <nav>
                    <a href="login.html">login</a>
                    </nav>
                    
                    <a href="index.php">Inicio</a>
                    <a href="index2.php" class="activo">Peliculas</a>
                    <a href="#">Mùsica</a>
                    <a href="#">DVD Informativos</a>
                    <a href="#">Documentales</a>
                    <a href="#">Audio Libros</a>
                </nav>
            </div>
			
			<form action="">
				<input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
			</form>
			
			<div class="categorias" id="categorias">
				<a href="#" class="activo">Todos</a>
				<a href="#">Acción</a>
				<a href="#">Suspenso</a>
				<a href="#">Terror</a>
				<a href="#">Comedia</a>
				<a href="#">Drama</a>
				<a href="#">Documental</a>
				<a href="#">Musical</a>
				<a href="#">Infantil</a>
				<a href="#">Romance</a>
                <a href="#">Ficción</a>
				<a href="#">Otros</a>
												
			</div>
</header>
      <section class="grid" id="grid">
        <div class="item"
        <?php $resultado = mysqli_query($conexion, $pelicula);        
            while($row = mysqli_fetch_assoc($resultado)) { ?> 
            
                    <div class="item"                    
							data-topografico="<?php echo $row ["TOPOGRAFICO"] ?>"
							data-titulo="<?php echo $row ["TITULO"] ?>"
							data-categoria="<?php echo $row ["CATEGORIA"] ?>"
							data-etiquetas=""
							data-descripcion="<?php echo $row ["DESCRIPCION"]?>"
							data-trailer="<?php echo $row ["TRAILER"]?>"
						>
						<div class="item-contenido">
						<img src="img/<?php echo $row ["TOPOGRAFICO"]?>.jpg" loading="lazy" alt="<?php echo $row ["TOPOGRAFICO"]?>">
					</div>        
						</div>
        <?php } ?>             
    </section> 
  </section>
    
		<section class="overlay" id="overlay">
			<div class="contenedor-img">
				<button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
				<img src="img/<?php echo $row ["TOPOGRAFICO"]?>.jpg" loading="lazy" alt="src=img/null.jpg">
			</div>
			<div class="texto">
				<p class="titulo"></p>
				<p class="descripcion"></p>
				<p class="t-topografico">Buscalo por:</p>
				<p class="topografico"></p>
				<iframe class="video" src="" title="YouTube video player" 
				frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
			</div>
			
			
		</section>
		 <footer class="contenedor">
		 	<div class="redes-sociales">
		 		<div class="contenedor-icono">
		 			<a href="http://www.twitter.com/BibloRedBogota" target="_blank" class="twitter">
		 				<i class="fab fa-twitter"></i>
	     			</a>
			</div>
				<div class="contenedor-icono">
		 			<a href="http://www.facebook.com/BibloRedBogota" target="_blank" class="facebook">
		 				<i class="fab fa-facebook-f"></i>
					</a>
				</div>
				<div class="contenedor-icono">
					<a href="http://www.instagram.com" target="_blank" class="instagram">
	 				<i class="fab fa-instagram"></i>
				</a>
				</div>
			</div>
		 	<div class="creado-por">
		 		<p>Sitio diseñado por <a href="#">James Nuñez</a> - <a href="#">hi</a></p>
		 	</div>
		 </footer>
	</div>
    
	<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
	<script src="main.js"></script>
</body>
</html>