<?php

    include("cn.php");



    $id = $_GET['id'];



    $eliminar = "DELETE FROM pelicula1 WHERE ID ='$id'";

    $resultadoEliminar=mysqli_query($conexion, $eliminar);



    if($resultadoEliminar){

        echo "<script>alert('REGISTRO ELIMINADO');window.location='modificar1.php';</script>";

    } else{

        echo "<script>alert('NO SE ELIMINO'); window.history.go(-1);</script>";

    }