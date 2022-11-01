<?php
    include("cn.php");
    $pelicula = "SELECT * FROM reco_pelicula";
?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.1.6/dist/css/themes/splide-skyblue.min.css">
	

	<title>BiblioMovies</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">BiblioMovies</h2>
            
			<nav>
                <a href="login.html" class="activo">Login</a>
				<a href="#" class="activo">Inicio</a>
				<a href="index2.php">Peliculas</a>
				<a href="#">Mùsica</a>
				<a href="#">DVD Informativos</a>
				<a href="#">Documentales</a>
				<a href="#">Audio Libros</a>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Interestellar</h3>
				<p class="descripcion">
					Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.
				</p>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>			
	</main>
	
	
	<div class="contenedor-flex">	
        <div class="splide">
		<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">				
				</button>
				<button class="splide__arrow splide__arrow--next">				
				</button>
				</div>		
			<div class="contenedor-titulo">
					<h3>Películas Recomendadas</h3>
			</div> 			
            <div class="splide__track">				
                <ul class="splide__list">				
                    <?php $resultado = mysqli_query($conexion, $pelicula);        
                            while($row = mysqli_fetch_assoc($resultado)) { ?>  
                                <li class="splide__slide">
                                    <div clas="splide__list"
										data-topografico="<?php echo $row ["TOPOGRAFICO"] ?>"
										data-titulo="<?php echo $row ["TITULO"] ?>"
										data-categoria="<?php echo $row ["CATEGORIA"] ?>"
										data-etiquetas=""
										data-descripcion="<?php echo $row ["DESCRIPCION"]?>"
										data-trailer="<?php echo $row ["TRAILER"]?>"
									>
										<img loading="lazy" src="img/<?php echo $row ["TOPOGRAFICO"]?>.jpg" alt="">
										<p><?php echo $row ["TITULO"] ?></p>
										<p><?php echo $row ["TOPOGRAFICO"] ?></p>
									</div>
								</li>
                            <?php } ?>
                </ul>
				
            </div>
			 <!-- Add the progress bar element -->
			<div class="my-slider-progress">
				<div class="my-slider-progress-bar"></div>
			</div>


        </div>
		
	</div>

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
		

 <!--<footer class="contenedor">
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
	</div>-->
	<div class="creado-por">
		<p>Sitio diseñado por <a href="#">James Nuñez</a> - <a href="#">hi</a></p>
	</div>
</footer>

</div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.1.6/dist/js/splide.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.7/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/3d52a28024.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	
</body>
</html>