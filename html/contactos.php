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
    <link rel="stylesheet" href="../css/contactos.css">
    <!--GoogleFonts Poppins-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <!--GoogleFonts SansSerif-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!--IONICONSV3-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--ANIMATECSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Contactos</title>
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
                        <?php if ($selectrol == 1 && $usuario_visitante != 6) { 
                        ?>
                        <li class="menu__item"><a class="menu__link" href="../paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link" href="expositor.php">Expositores</a></li>
                        <li class="menu__item"><a class="menu__link" href="datagridview.php">Centro de Control</a></li>
                        <li class="menu__item"><a class="menu__link select" href="contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } 
                        ?>
                        <?php if ($selectrol == 2 && $usuario_visitante != 6) { 
                        ?>
                        <li class="menu__item"><a class="menu__link" href="../paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link" href="expositor.php">Expositores</a></li>
                        <li class="menu__item"><a class="menu__link select" href="contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } 
                        ?>
                        <?php if ($usuario_visitante == 6) { 
                        ?>
                        <li class="menu__item"><a class="menu__link" href="../paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link select" href="contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } 
                        ?> 

                    </ul>
                </nav>
            </div>
        </header>

        <form class="form-main animate__animated animate__fadeInLeft animate__delay-1s" action="../php/contactos.php" method="POST">
            <h2 class="form__title">Contactos</h2>
            <span class="span-form">Brindamos soporte durante la feria, no dudes en escribirnos para resolver tu caso.</span>
            <input class="input-main" type="text" name="name" placeholder="Introduzca su Nombre">
            <input class="input-main" type="text" name="mail" placeholder="Introduzca su Correo">
            <input class="input-main" type="text" name="phone" placeholder="Introduzca su Telefono">
            <textarea class="input-main-txt" name="message" cols="30" rows="10" placeholder="Escriba aqui el motivo"></textarea>
            <span class="span-form">Este mensaje llegara a las personas encargadas de la pagina, atenderemos su peticion a la brevedad posible.</span>
            <input class="btn-submit1" type="submit" value="Enviar" id="boton">
            
        </form>

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
    <script src="../js/funciones.js"></script>
</body>

</html>