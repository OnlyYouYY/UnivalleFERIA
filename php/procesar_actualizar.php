<?php
include("bd.php");

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$rol_id = $_POST['rol_id'];

$actualizar = "UPDATE usuarios SET usuario='$usuario',contraseña='$contraseña',rol_id='$rol_id' WHERE id = '$id'";


$resultado = mysqli_query($conexion, $actualizar);

if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente'); window.location='edicion.php';</script>";

}else{
    echo"<script>alert('No se pudo actualizar los datos'); window.history.go(-1);</script>";
}