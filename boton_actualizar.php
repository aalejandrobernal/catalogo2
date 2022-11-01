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
    date_default_timezone_set("America/Bogota");
    $fecha = date("d-m-Y");
    $hora = date("h:i a");

    $id = $_POST['id'];
    $titulo = $_POST['TITULO'];
    $audencia = $_POST['AUDENCIA'];
    $publico = $_POST['PUBLICO'];
    $tipo_material = $_POST['TIPO_MATERIAL'];
    $descripcion = $_POST['DESCRIPCION'];
    $categoria = $_POST['CATEGORIA'];
    $topografico = $_POST['TOPOGRAFICO'];
    $trailer = $_POST['TRAILER'];
    $reco = $_POST['RECOMENDADO'];
    $user=$_SESSION['usuario'];
    $newfilename = $topografico . ".jpg";
    
    

    $DESTINATION = __DIR__.'/img/';
    $subir_archivo = $DESTINATION.basename($_FILES['name']['type']);

    if (move_uploaded_file($_FILES['IMG']['tmp_name'], $subir_archivo . $newfilename)) {
     // echo "<script>alert('$DESTINATION');</script>";    
    } else {
       echo "<script>alert('imagen no subida');</script>";
    }
    

    $actualizar = "UPDATE pelicula1 SET TITULO='$titulo',AUDENCIA='$audencia',PUBLICO='$publico',TIPO_MATERIAL='$tipo_material',DESCRIPCION='$descripcion',CATEGORIA='$categoria',TRAILER='$trailer',USER='$user',FECHA='$fecha',HORA='$hora' WHERE ID='$id'";
    $resultado=mysqli_query($conexion, $actualizar);

    if($reco == "1"){
        $insert = "INSERT INTO reco_pelicula(id,TITULO,AUDENCIA,PUBLICO,TIPO_MATERIAL,DESCRIPCION,CATEGORIA,TOPOGRAFICO,TRAILER) VALUES('$id','$titulo','$audencia','$publico','$tipo_material','$descripcion','$categoria','$topografico','$trailer')";
        $resu = mysqli_query($conexion, $insert);
    }    
    

    if($resultado or $resu){
        echo "<script>alert('REGISTRO ACTUALIZADO CON EXITO');window.location='/modificar1.php';</script>";
    } else{
        echo "<script>alert('REGISTRO NO ACTUALIZADO :('); window.history.go(-1);</script>";
    }
