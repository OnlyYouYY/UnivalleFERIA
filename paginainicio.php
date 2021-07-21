<?php
include('php/conexion.php');
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
    <link rel="stylesheet" href="css/styles.css?v11">
    <!--GoogleFonts Poppins-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <!--GoogleFonts SansSerif-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!--IONICONSV3-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!--ANIMATECSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Feria Univalle</title>
</head>
<body>
    <header class="header animate__animated animate__fadeInLeft">
        <div class="content">
            <img src="img/logo-uv.png" alt="LogoUnivalle" class="logo">
            <span class="icon-menu" id="btn_menu">
                <ion-icon name="menu"></ion-icon>
            </span>
            <nav class="nav" id="nav">
                <ul class="menu">
                    <?php if ($selectrol == 1 && $usuario_visitante != 6) { ?>
                        <li class="menu__item"><a class="menu__link select" href="paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="html/proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link" href="html/expositor.php">Expositores</a></li>
                        <li class="menu__item"><a class="menu__link" href="html/datagridview.php">Centro de Control</a></li>
                        <li class="menu__item"><a class="menu__link" href="html/contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="php/logout.php">Salir</a></li>
                    <?php } ?>
                    <?php if ($selectrol == 2 && $usuario_visitante != 6) { ?>
                        <li class="menu__item"><a class="menu__link select" href="paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="html/proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link" href="html/expositor.php">Expositores</a></li>
                        <li class="menu__item"><a class="menu__link" href="html/contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="php/logout.php">Salir</a></li>
                    <?php } ?>
                    <?php if ($usuario_visitante == 6) { ?>
                        <li class="menu__item"><a class="menu__link select" href="paginainicio.php">Inicio<a></li>
                        <li class="menu__item"><a class="menu__link" href="html/proyectos.php">Galeria</a></li>
                        <li class="menu__item"><a class="menu__link" href="html/contactos.php">Contactos</a></li>
                        <li class="menu__item"><a class="menu__link" href="php/logout.php">Salir</a></li>
                    <?php } ?>

                </ul>
            </nav>
            <!--BUSQUEDA INTELIGENTE-->
            <div id="ctn-icon-search">
                <ion-icon name="search" id="icon-search"></ion-icon>
                <a href="/php/logout.php"></a>
            </div>
        </div>
    </header>
    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="Introduce tu busqueda">
    </div>
    <ul id="box-search">
        <li><a href="html/page1.php">
                <ion-icon name="search"></ion-icon>Ingenieria Industrial
            </a></li>
        <li><a href="html/page2.php">
                <ion-icon name="search"></ion-icon>Industrial y de Sistemas
            </a></li>
        <li><a href="html/page3.php">
                <ion-icon name="search"></ion-icon>Ingenieria Civil
            </a></li>
        <li><a href="html/page4.php">
                <ion-icon name="search"></ion-icon>Telecomunicaciones
            </a></li>
        <li><a href="html/page5.php">
                <ion-icon name="search"></ion-icon>Electronica y de Sistemas
            </a></li>
        <li><a href="html/page6.php">
                <ion-icon name="search"></ion-icon>Biomedica
            </a></li>
        <li><a href="html/page7.php">
                <ion-icon name="search"></ion-icon>Ingenieria de Sistemas
            </a></li>
        <li><a href="html/page8.php">
                <ion-icon name="search"></ion-icon>Desarrollo de Videojuegos
            </a></li>
        <li><a href="html/contactos.html">
                <ion-icon name="search"></ion-icon>Contactos
            </a></li>
        <li><a href="/html/proyectos.php">
                <ion-icon name="search"></ion-icon>Proyectos
            </a></li>

    </ul>
    <div id="cover-ctn-search"></div>

    <!--BANNER-->
    <div class="banner">
        <img src="img/backgroundBGOF.jpg" alt="BannerUnivalle" class="banner__img">
        <div class="content animate__animated animate__fadeIn animate__delay-1s">
            <h2 class="banner__titulo">Feria Univalle</h2>
            <p class="banner__txt">Disfruta de todo el contenido de esta feria multidisplinaria y califica a los que mas te gusten</p>
        </div>
    </div>
    <!--Contenido INFO-CARRERAS-->
    <main class="main">
        <div class="content animate__animated animate__fadeInUp animate__delay-1s">
            <section class="info">
                <article class="info__columna">
                    <a href="html/page1.php" class="a__info">
                        <img src="img/image1.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Ingenieria Industrial</h2>
                    </a>
                    <p class="info__txt">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum inventore totam maiores! Laudantium, nesciunt id!</p>
                </div>
                </article>
                <article class="info__columna">
                    <a href="html/page2.php" class="a__info">
                        <img src="img/image2.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Industrial y de Sistemas</h2>
                    </a>
                    <p class="info__txt">Vitae nostrum voluptate, eaque rem doloribus inventore laborum nesciunt repellendus enim fugit magnam non cupiditate?</p>
                </div>
                </article>
                <article class="info__columna">
                    <a href="html/page3.php" class="a__info">
                        <img src="img/image3.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Ingenieria Civil</h2>
                    </a>
                    <p class="info__txt">Eos, illo incidunt voluptatum error sequi architecto maxime autem et facilis officia in nam a.</p>
                </div>
                </article>
                <article class="info__columna">
                    <a href="html/page4.php" class="a__info">
                        <img src="img/image4.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Telecomunicaciones</h2>
                    </a>
                    <p class="info__txt">Ea veritatis distinctio cum voluptates quibusdam beatae quis autem. Velit neque et quos quidem inventore!</p>
                </div>
                </article>
                <article class="info__columna">
                    <a href="html/page5.php" class="a__info">
                        <img src="img/image5.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Electronica y Sistemas</h2>
                    </a>
                    <p class="info__txt">Ea veritatis distinctio cum voluptates quibusdam beatae quis autem. Velit neque et quos quidem inventore!</p>
                </div>
                </article>
                <article class="info__columna">
                    <a href="html/page6.php" class="a__info">
                        <img src="img/image6.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Biomedica</h2>
                    </a>
                    <p class="info__txt">Ea veritatis distinctio cum voluptates quibusdam beatae quis autem. Velit neque et quos quidem inventore!</p>
                </div>
                </article>
                <article class="info__columna">
                    <a href="html/page7.php" class="a__info">
                        <img src="img/image7.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Ingenieria de Sistemas Informaticos</h2>
                    </a>
                    <p class="info__txt">Ea veritatis distinctio cum voluptates quibusdam beatae quis autem. Velit neque et quos quidem inventore!</p>
                </div>
                </article>
                <article class="info__columna">
                    <div class="info__complete">
                        <h2 class="info__titulo">Informacion</h2>
                    <p class="info__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam molestias magni, temporibus, laboriosam quidem sint voluptates rem nam dolor eos numquam sed perferendis, ullam molestiae sunt corrupti natus. Nemo, adipisci! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, tenetur? At voluptatum, id atque ut cum et quibusdam delectus doloremque? Quaerat, sapiente nam. Dolorem, soluta eveniet! Consectetur omnis laudantium cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odio labore quaerat hic quos veniam excepturi soluta nisi veritatis expedita incidunt, aut sequi, rerum magnam vel doloribus est dignissimos itaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptas magni fugit iure recusandae quia necessitatibus repudiandae minima distinctio vitae. Enim tempora placeat ipsa, blanditiis dicta velit porro ipsam nam!</p>
                </div>
                </article>
                <article class="info__columna">
                    <a href="html/page8.php" class="a__info">
                        <img src="img/image8.jpg" alt="" class="info__img">
                        <div class="info__complete">
                        <h2 class="info__titulo">Desarrollo de Videojuegos</h2>
                    </a>
                    <p class="info__txt">Ea veritatis distinctio cum voluptates quibusdam beatae quis autem. Velit neque et quos quidem inventore!</p>
                </div>
                </article>
            </section>
            
        </div>
    </main>
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
    <script src="js/funciones.js"></script>
</body>

</html>