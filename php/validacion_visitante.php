<?php
$usuario_visitante=$_POST['visitante'];
$selectrol=$_POST['selectrol'];

session_start();
$_SESSION['visitante']=$usuario_visitante;
$_SESSION['selectrol']=$selectrol;

if($usuario_visitante){
    header("location:../paginainicio.php");
}
mysqli_close($conexion);