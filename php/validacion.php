<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$selectrol=$_POST['selectrol'];
$usuario_visitante=$_POST['visitante'];

session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['selectrol']=$selectrol;
$_SESSION['visitante']=$usuario_visitante;

include('bd.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario'and contraseña='$contraseña'and rol_id='$selectrol'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
    header("location:../paginainicio.php");

}else{
    echo "<script>alert('Error en la autentificacion'); window.history.go(-1);</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);


