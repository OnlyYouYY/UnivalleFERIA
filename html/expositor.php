<?php
include('../php/bd.php');
session_start();
$selectrol = $_SESSION['selectrol'];
$usuario_visitante = $_SESSION['visitante'];
if($selectrol == 1 && $usuario_visitante == 6){
    $selectrol = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Enlace con CSS-->
    <link rel="stylesheet" href="../css/styleFormularioExpositor.css?v2">
    <!--GoogleFonts Poppins-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <!--GoogleFonts SansSerif-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!--ANIMATECSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--IONICONSV3-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Proyectos</title>
</head>

<body>
    <div class="body2">
        <header class="header animate__animated animate__fadeInLeft">
            <div class="content">
                <img src="../img/logo-uv.png" alt="LogoUnivalle" class="logo">
                <span class="icon-menu" id="btn_menu">
                    <ion-icon name="menu"></ion-icon>
                </span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                        <?php if($selectrol == 1 && $usuario_visitante != 6){
                        ?>
                        <li class="menu__item"><a class="menu__link" href="../paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link select" href="expositor.php">Expositores</a></li>
                        <li class="menu__item"><a class="menu__link" href="datagridview.php">Centro de Control</a></li>
                        <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php }?>
                        <?php if($selectrol == 2 && $usuario_visitante != 6){
                        ?>
                        <li class="menu__item"><a class="menu__link"href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link"href="proyectos.php">Galeria</a></li>
                            <li class="menu__item"><a class="menu__link select"href="expositor.php">Expositores</a></li>                
                            <li class="menu__item"><a class="menu__link"href="contactos.php">Contactos</a></li>
                            <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php }
                        ?>
                        <?php if($usuario_visitante == 6){
                        ?>
                            <li class="menu__item"><a class="menu__link "href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link"href="proyectos.php">Galeria</a></li>                 
                            <li class="menu__item"><a class="menu__link"href="contactos.php">Contactos</a></li>
                            <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <!--FORMULARIO SUBIR ARCHIVO-->
        <div class="content animate__animated animate__fadeInLeft animate__delay-1s">
            <div class="formulario-style">
                <form action="../php/insertar_archivos.php" class="formulario" method="POST" enctype="multipart/form-data" id="formsubir">
                    <h1 class="form__title">Subir Proyecto</h1>
                    <span class="span-form">Este formulario es utilizado para Expositores por lo cual pedimos subir el proyecto de forma correcta verificando los archivos a subir. Teniendo en cuenta los formatos de cada elemento que en este caso son: <b>MP4, JPG, PDF</b>. <br>Cualquier consulta hacerla por el apartado de <b>Contactos</b> donde podra contactar con los encargados en caso de tener algun problema.</span>
                    <div class="container--50">
                        <label for="" class="form__label">Titulo de Proyecto</label>
                        <input type="text" class="form__input" required name="titulo">
                    </div>
                    <div class="container--50">
                        <label for="" class="form__label">Descripcion</label>
                        <textarea class="form__input" required name="descripcion" cols="30" rows="5"></textarea>
                        
                    </div>
                    <label class="form__label2">Video Proyecto</label>
                    <div class="container__file">
                        <input type="text" placeholder="Ningun Archivo de Video Seleccionado" readonly id="filetext" class="file__txt" name="filetext">
                        <label for="inputfile" class="form-file-btn form-file-btn2">
                            <ion-icon name="folder" class="icon-file"></ion-icon>Subir MP4
                        </label>
                        <input type="file" id="inputfile" name="inputfile" class="form__file">

                    </div>
                    <label class="form__label2">Banner de Proyecto</label>
                    <div class="container__file">
                        <label for="inputfile__img" class="form-file-btn btn-input-img">
                            <ion-icon name="folder" class="icon-file"></ion-icon>Subir Imagen
                        </label>
                        <input type="file" id="inputfile__img" name="inputfile__img" class="form__file">
                    </div>
                    <label class="form__label2">Documento Adjunto/PDF</label>
                    <div class="container__file">
                        <label for="inputfile__pdf" class="form-file-btn btn-input-img">
                            <ion-icon name="folder" class="icon-file"></ion-icon>Subir PDF
                        </label>
                        <input type="file" id="inputfile__pdf" name="inputfile__pdf" class="form__file">
                    </div>
                    <label class="form__label2">Selecciona tu carrera</label>
                    <select class="selectcarrera" name="selectcarrera">
                        <option value="1">Ingenieria Industrial</option>
                        <option value="2">Industrial y de Sistemas</option>
                        <option value="3">Ingenieria Civil</option>
                        <option value="4">Telecomunicaciones</option>
                        <option value="5">Electronica y sistemas</option>
                        <option value="6">Biomedica</option>
                        <option value="7">Ingenieria de Sistemas informaticos</option>
                        <option value="8">Desarrollo de Videojuegos</option>
                    </select>

                    <progress id="progressBar" value="0" max="100" class="progressBar"></progress>
                    <input type="submit" id="fileUpload" class="form__submit">
                </form>
            </div>
        </div>

        <!--FOOTER-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <h3><figure class="logo-footer">
                            <img src="http://www.univalle.edu/lapaz/storage/app/media/img/dLP.png">
                        </figure></h3>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3 class="t-footer">Estudiantes</h3>
                        <ul class="nav-footer hide-box-div">
                                            <li><a target="_blank" href="http://www.univalle.edu/lapaz/estudiar-en-univalle/infraestructura">Infraestructura</a></li>
                                            <li><a target="_blank" href="http://www.univalle.edu/lapaz/estudiar-en-univalle/estudiantes-internacionales">Estudiantes Internacionales</a></li>
                                            <li><a target="_blank" href="http://www.univalle.edu/lapaz/interaccion-social/bienestar-universitario-univalle">Bienestar Universitario</a></li>
                                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3 class="t-footer">Comunícate</h3>
                        <ul class="nav-footer hide-box-div">
                                            <li><a target="_blank" href="https://enlace.univalle.edu/san/webform/PVerificar.aspx">SIU</a></li>
                                            <li><a target="_blank" href="mailto:info@univalle.edu">info@univalle.edu</a></li>
                                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h3 class="t-footer">En las redes</h3>
                        <ul class="nav-footer social-box hide-box-div">
                            
                            <li><a target="_blank" href="https://www.facebook.com/univallelpz/?ref=br_rs"><span><ion-icon class ="icon-"name="logo-facebook"></ion-icon> Facebook La Paz</span></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/univalle_lapaz/"><span><ion-icon class ="icon-"name="logo-instagram"></ion-icon> Instagram Univalle</span></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/user/univallebolivia"><span><ion-icon class ="icon-"name="logo-youtube"></ion-icon> Youtube Univalle</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/maxfilesize.js"></script>
    <script src="../js/funciones.js"></script>
    <script src="../js/formularioupload.js"></script>
</body>

</html>