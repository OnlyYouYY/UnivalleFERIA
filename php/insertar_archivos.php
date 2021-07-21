<?php

$conexion = mysqli_connect("localhost", "root", "", "jhamileduardomaytaquisbert");

$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$filetext = $_POST["filetext"];
$selectcarrera = $_POST["selectcarrera"];

switch($selectcarrera){
    case "1":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
    case "2":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);   
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload_2(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
    case "3":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);   
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload_3(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
    case "4":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);   
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload_4(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
    case "5":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);   
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload_5(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
    case "6":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);   
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload_6(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
    case "7":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);   
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload_7(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
    case "8":
        if ($_FILES["inputfile"]); {
            $nombre_base = basename($_FILES["inputfile"]["name"]);
            $nombre_final = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base;
            $ruta = "../upload/upload_video/" . $nombre_final;
            $subirarchivo = move_uploaded_file($_FILES["inputfile"]["tmp_name"], $ruta);
            if($_FILES["inputfile__img"]);{
                $nombre_base_img = basename($_FILES["inputfile__img"]["name"]);
                $nombre_final_img = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_img;
                $ruta_img = "../upload/upload_img/" . $nombre_final_img;
                $subirarchivo_img = move_uploaded_file($_FILES["inputfile__img"]["tmp_name"], $ruta_img);   
                if($_FILES["inputfile__pdf"]);{
                    $nombre_base_pdf = basename($_FILES["inputfile__pdf"]["name"]);
                    $nombre_final_pdf = date("d-m-y") . "-" . date("h-i-s") . "-" . $nombre_base_pdf;
                    $ruta_pdf = "../upload/upload_pdf/" . $nombre_final_pdf;
                    $subirarchivo_pdf = move_uploaded_file($_FILES["inputfile__pdf"]["tmp_name"], $ruta_pdf);   
            if ($subirarchivo and $subirarchivo_img and $subirarchivo_pdf) {
                $insertarSQL = "INSERT INTO upload_8(titulo, descripcion, texto_archivo, ruta_archivo, id_carrera, ruta_banner, ruta_pdf) VALUES ('$titulo','$descripcion','$filetext','$ruta','$selectcarrera','$ruta_img','$ruta_pdf')";
                $resultado = mysqli_query($conexion, $insertarSQL);
                if ($resultado) {
                    echo "<script>alert('Se ha subido el archivo exitosamente'); window.location= '../paginainicio.php'</script>";
                } else {
                    printf("Errormessage: %s\n", mysqli_error($conexion));
                }
            }
        }
    }
}
    break;
}

    
