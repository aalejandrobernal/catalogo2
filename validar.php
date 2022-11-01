<?php
include("cn.php");
session_start();
$usuario =$_POST['usuario'];
$clave =$_POST['clave'];

$_SESSION['usuario'] = $usuario;


$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);
if($filas>0){
    header("location:modificar1.php");
}
else{
    echo "Error en la autentificacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);