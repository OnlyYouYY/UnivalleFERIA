<?php

$conexion = mysqli_connect("localhost", "root", "", "jhamileduardomaytaquisbert");

$ipaddress = $_POST['ipaddress'];
$id_proyecto = $_POST['idproyecto'];
$id_carrera = $_POST['idcarrera'];
$calificacion = $_POST['estrellas'];

switch($id_carrera){
case "1":
$insertarSQL = "INSERT INTO calificacion(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
$resultado = mysqli_query($conexion, $insertarSQL);
            if ($resultado) {
                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
            } else {
                printf("Errormessage: %s\n", mysqli_error($conexion));
            }
            break;
            case "2":
                $insertarSQL = "INSERT INTO calificacion2(id_proyecto,id_carrera,puntuacion) VALUES ('$id_proyecto','$id_carrera','$calificacion')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                            if ($resultado) {
                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
                            } else {
                                printf("Errormessage: %s\n", mysqli_error($conexion));
                            }
                            break;
                            case "3":
                                $insertarSQL = "INSERT INTO calificacion3(id_proyecto,id_carrera,puntuacion) VALUES ('$id_proyecto','$id_carrera','$calificacion')";
                                $resultado = mysqli_query($conexion, $insertarSQL);
                                            if ($resultado) {
                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
                                            } else {
                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                            }
                                            break;
                                            case "4":
                                                $insertarSQL = "INSERT INTO calificacion4(id_proyecto,id_carrera,puntuacion) VALUES ('$id_proyecto','$id_carrera','$calificacion')";
                                                $resultado = mysqli_query($conexion, $insertarSQL);
                                                            if ($resultado) {
                                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
                                                            } else {
                                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                                            }
                                                            break;
                                                            case "5":
                                                                $insertarSQL = "INSERT INTO calificacion5(id_proyecto,id_carrera,puntuacion) VALUES ('$id_proyecto','$id_carrera','$calificacion')";
                                                                $resultado = mysqli_query($conexion, $insertarSQL);
                                                                            if ($resultado) {
                                                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
                                                                            } else {
                                                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                                                            }
                                                                            break;
                                                                            case "6":
                                                                                $insertarSQL = "INSERT INTO calificacion6(id_proyecto,id_carrera,puntuacion) VALUES ('$id_proyecto','$id_carrera','$calificacion')";
                                                                                $resultado = mysqli_query($conexion, $insertarSQL);
                                                                                            if ($resultado) {
                                                                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
                                                                                            } else {
                                                                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                                                                            }
                                                                                            break;
                                                                                            case "7":
                                                                                                $insertarSQL = "INSERT INTO calificacion7(id_proyecto,id_carrera,puntuacion) VALUES ('$id_proyecto','$id_carrera','$calificacion')";
                                                                                                $resultado = mysqli_query($conexion, $insertarSQL);
                                                                                                            if ($resultado) {
                                                                                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
                                                                                                            } else {
                                                                                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                                                                                            }
                                                                                                            break;
                                                                                                            case "8":
                                                                                                                $insertarSQL = "INSERT INTO calificacion8(id_proyecto,id_carrera,puntuacion) VALUES ('$id_proyecto','$id_carrera','$calificacion')";
                                                                                                                $resultado = mysqli_query($conexion, $insertarSQL);
                                                                                                                            if ($resultado) {
                                                                                                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= '../paginainicio.php'</script>";
                                                                                                                            } else {
                                                                                                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                                                                                                            }
                                                                                                                            break;
        }
