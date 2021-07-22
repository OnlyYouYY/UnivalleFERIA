<?php
include("../php/bd.php");
session_start();
$selectrol = $_SESSION['selectrol'];
$usuarios = "CALL SP_USUARIOS";
$roles = "SELECT* FROM rol";
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
    <link rel="stylesheet" href="../css/crud.css">
    <!--CSS Chart.js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
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
    <title>Crud</title>
</head>

<body>

    <div class="body2">
        <header class="header">
            <div class="content animate__animated animate__fadeInLeft">
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
                        <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } 
                        ?>
                        <?php if ($selectrol == 2 && $usuario_visitante != 6) { 
                                ?>
                        <li class="menu__item"><a class="menu__link" href="../paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link" href="expositor.php">Expositores</a></li>
                        <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } 
                        ?>
                        <?php if ($usuario_visitante == 6) { 
                        ?>
                        <li class="menu__item"><a class="menu__link" href="../paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } 
                        ?>
                    </ul>
                </nav>
            </div>
        </header>

        <!--CRUD-->
        <div class="content animate__animated animate__fadeIn animate__delay-1s">
            <div class="container-table">
                <div class="table__title">Datos de Usuario <a href="../php/edicion.php" class="title__edit">Edicion</a></div>
                <div class="table__header">Usuario</div>
                <div class="table__header">Contraseña</div>
                <div class="table__header">Rol</div><br>
                <?php $resultado = mysqli_query($conexion, $usuarios);
                while ($row = mysqli_fetch_assoc($resultado)) { 
                ?>
                <div class="table__item"><?php echo $row["usuario"] 
                                            ?></div>
                <div class="table__item"><?php echo $row["contraseña"] 
                                            ?></div>
                <div class="table__item"><?php echo $row["rol"] 
                                            ?></div><br>
                <?php } 
                ?>
                <?php mysqli_free_result($resultado); 
                ?>
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
    <script src="../js/funciones.js"></script>
</body>

</html>