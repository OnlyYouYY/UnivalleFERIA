<?php

$conexion = mysqli_connect("localhost", "root", "", "jhamileduardomaytaquisbert");

$ipaddress = $_POST['ipaddress'];
$id_proyecto = $_POST['idproyecto'];
$id_carrera = $_POST['idcarrera'];
$calificacion = $_POST['estrellas'];

switch($id_carrera){
case "1":
    $consulta="SELECT*FROM calificacion WHERE IP_Address = '$ipaddress'";
    $resultado_consulta=mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado_consulta);
    if($filas){
        echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page1.php'</script>";
    } else {
            $insertarSQL = "INSERT INTO calificacion(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
            $resultado = mysqli_query($conexion, $insertarSQL);
            if ($resultado) {
                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page1.php'</script>";
            } else {
                printf("Errormessage: %s\n", mysqli_error($conexion));
            }
        }
        break;
        case "2":
            $consulta="SELECT*FROM calificacion2 WHERE IP_Address = '$ipaddress'";
            $resultado_consulta=mysqli_query($conexion,$consulta);
            $filas=mysqli_num_rows($resultado_consulta);
            if($filas){
                echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page2.php'</script>";
            } else {
                    $insertarSQL = "INSERT INTO calificacion2(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
                    $resultado = mysqli_query($conexion, $insertarSQL);
                    if ($resultado) {
                        echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page2.php'</script>";
                    } else {
                        printf("Errormessage: %s\n", mysqli_error($conexion));
                    }
                }
                break;
                case "3":
                    $consulta="SELECT*FROM calificacion3 WHERE IP_Address = '$ipaddress'";
                    $resultado_consulta=mysqli_query($conexion,$consulta);
                    $filas=mysqli_num_rows($resultado_consulta);
                    if($filas){
                        echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page3.php'</script>";
                    } else {
                            $insertarSQL = "INSERT INTO calificacion3(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
                            $resultado = mysqli_query($conexion, $insertarSQL);
                            if ($resultado) {
                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page3.php'</script>";
                            } else {
                                printf("Errormessage: %s\n", mysqli_error($conexion));
                            }
                        }
                        break;
                        case "4":
                            $consulta="SELECT*FROM calificacion4 WHERE IP_Address = '$ipaddress'";
                            $resultado_consulta=mysqli_query($conexion,$consulta);
                            $filas=mysqli_num_rows($resultado_consulta);
                            if($filas){
                                echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page4.php'</script>";
                            } else {
                                    $insertarSQL = "INSERT INTO calificacion4(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
                                    $resultado = mysqli_query($conexion, $insertarSQL);
                                    if ($resultado) {
                                        echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page4.php'</script>";
                                    } else {
                                        printf("Errormessage: %s\n", mysqli_error($conexion));
                                    }
                                }
                                break;
                                case "5":
                                    $consulta="SELECT*FROM calificacion5 WHERE IP_Address = '$ipaddress'";
                                    $resultado_consulta=mysqli_query($conexion,$consulta);
                                    $filas=mysqli_num_rows($resultado_consulta);
                                    if($filas){
                                        echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page5.php'</script>";
                                    } else {
                                            $insertarSQL = "INSERT INTO calificacion5(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
                                            $resultado = mysqli_query($conexion, $insertarSQL);
                                            if ($resultado) {
                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page5.php'</script>";
                                            } else {
                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                            }
                                        }
                                        break;
                                        case "6":
                                            $consulta="SELECT*FROM calificacion6 WHERE IP_Address = '$ipaddress'";
                                            $resultado_consulta=mysqli_query($conexion,$consulta);
                                            $filas=mysqli_num_rows($resultado_consulta);
                                            if($filas){
                                                echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page6.php'</script>";
                                            } else {
                                                    $insertarSQL = "INSERT INTO calificacion6(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
                                                    $resultado = mysqli_query($conexion, $insertarSQL);
                                                    if ($resultado) {
                                                        echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page6.php'</script>";
                                                    } else {
                                                        printf("Errormessage: %s\n", mysqli_error($conexion));
                                                    }
                                                }
                                                break;
                                                case "7":
                                                    $consulta="SELECT*FROM calificacion7 WHERE IP_Address = '$ipaddress'";
                                                    $resultado_consulta=mysqli_query($conexion,$consulta);
                                                    $filas=mysqli_num_rows($resultado_consulta);
                                                    if($filas){
                                                        echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page7.php'</script>";
                                                    } else {
                                                            $insertarSQL = "INSERT INTO calificacion7(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
                                                            $resultado = mysqli_query($conexion, $insertarSQL);
                                                            if ($resultado) {
                                                                echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page7.php'</script>";
                                                            } else {
                                                                printf("Errormessage: %s\n", mysqli_error($conexion));
                                                            }
                                                        }
                                                        break;
                                                        case "8":
                                                            $consulta="SELECT*FROM calificacion8 WHERE IP_Address = '$ipaddress'";
                                                            $resultado_consulta=mysqli_query($conexion,$consulta);
                                                            $filas=mysqli_num_rows($resultado_consulta);
                                                            if($filas){
                                                                echo "<script>alert('No puede registrar su voto mas de una vez'); window.location= 'page8.php'</script>";
                                                            } else {
                                                                    $insertarSQL = "INSERT INTO calificacion8(IP_Address,id_proyecto,id_carrera,puntuacion) VALUES ('$ipaddress','$id_proyecto','$id_carrera','$calificacion')";
                                                                    $resultado = mysqli_query($conexion, $insertarSQL);
                                                                    if ($resultado) {
                                                                        echo "<script>alert('Se ha enviado el formulario exitosamente'); window.location= 'page8.php'</script>";
                                                                    } else {
                                                                        printf("Errormessage: %s\n", mysqli_error($conexion));
                                                                    }
                                                                }
                                                                break;
        }
