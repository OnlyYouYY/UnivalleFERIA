<?php
include('../php/bd.php');
session_start();
$selectrol = $_SESSION['selectrol'];
$usuario_visitante = $_SESSION['visitante'];
if($selectrol == 1 && $usuario_visitante == 6){
    $selectrol = 0;
}
$proyecto = "SELECT*FROM upload_6";
$count = 0;
$count_radio = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Enlace con CSS-->
    <link rel="stylesheet" href="../css/page_carreras.css?v3">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script>
        var array_titulos = [];
    </script>


    <title>Biomedica</title>
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
                        <?php if ($selectrol == 1 && $usuario_visitante != 6) { ?>
                            <li class="menu__item"><a class="menu__link" href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                            <li class="menu__item"><a class="menu__link" href="expositor.php">Expositores</a></li>
                            <li class="menu__item"><a class="menu__link" href="datagridview.php">Centro de Control</a></li>
                            <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a></li>
                            <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } ?>
                        <?php if ($selectrol == 2 && $usuario_visitante != 6) { ?>
                            <li class="menu__item"><a class="menu__link select" href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                            <li class="menu__item"><a class="menu__link" href="expositor.php">Expositores</a></li>
                            <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a></li>
                            <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } ?>
                        <?php if ($usuario_visitante == 6) { ?>
                            <li class="menu__item"><a class="menu__link select" href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link" href="proyectos.php">Galeria</a></li>
                            <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a></li>
                            <li class="menu__item"><a class="menu__link" href="../php/logout.php">Salir</a></li>
                        <?php } ?>

                    </ul>
                </nav>
            </div>
        </header>

        <div class="content">
            <div class="content-showcase animate__animated animate__fadeIn animate__delay-1s">
                <div class="showcase showcase-img6">
                    <h2 class="h2-showcase">Biomedica</h2>
                    <p class="p-showcase">La Ingeniería Industrial es por definición la rama de las ingenierías encargada del análisis, interpretación, comprensión, diseño, programación y control de sistemas productivos y logísticos con miras a gestionar, implementar y establecer estrategias de optimización, con el objetivo de lograr el máximo rendimiento de los procesos de creación de bienes y/o la prestación de servicios.</p>
                    <a href="http://www.univalle.edu/lapaz/carrera/ing-industrial#sobre-la-carrera" class="btn-showcase">
                        <ion-icon name="more"></ion-icon>Leer Mas
                    </a>
                </div>
            </div>
            <hr style="height: 3px;">
            <!--PROYECTOS-->
            <div class="proyect-cards animate__animated animate__fadeIn animate__delay-1s">
                <?php $resultado = mysqli_query($conexion, $proyecto);
                while ($row = mysqli_fetch_assoc($resultado)) {
                    $count = $count + 1;
                ?>
                    <div>
                        <img src="<?php echo $row["ruta_banner"] ?>" alt="">
                        <h3><?php echo $row["titulo"] ?></h3>
                        <script>
                            array_titulos.push({
                                nombre_proyecto: '<?php echo $row["titulo"] ?>',
                                estado: 0,
                                id: 'submit_btn<?php echo $count ?>'
                            });
                        </script>
                        <p><?php echo $row["descripcion"] ?></p>
                        <button class="btn-showcase" id="open<?php echo $count ?>"> Ver Video</button>

                        <div class="modal-container_yam" id="modal-container<?php echo $count ?>">
                            <div class="modal_yam">
                                <video pause id="video<?php echo $count ?>" class="video-js vjs-default-skin" style="margin-bottom: 15px;" controls preload="none" width="960" height="540" data-setup="{}">
                                    <source src="<?php echo $row["ruta_archivo"] ?>" id="src<?php echo $count ?>" type='video/mp4'>
                                </video><br>
                                <span class="span-php">Titulo: <?php echo $row["titulo"] ?></span>
                                
                                <a target="_blank" href="<?php echo $row["ruta_pdf"] ?>">
                                <button class="btn-showcase btn-cerrar" id="document<?php echo $count ?>">Ver Documentacion</button></a>
                                <button class="btn-showcase btn-cerrar" id="cerrar<?php echo $count ?>">Cerrar</button>
                                <!--FORMULARIO CALIFICACION-->
                                <div class="form__box">
                                    <form action="../php/calificacion.php" method="POST">
                                        <input id="idproyecto" name="idproyecto" class="hidden-form" type="hidden" value="<?php echo $row["id"] ?>">
                                        <input id="idcarrera" name="idcarrera" class="hidden-form" type="hidden" value="<?php echo $row["id_carrera"] ?>">
                                        <h5 class="form-ct3">¡Dale una calificacion a nuestro trabajo!</h3>
                                            <p class="clasificacion">
                                                <?php
                                                $count_aux = 5;
                                                for ($i = $count_radio; $i < 5 + $count_radio; $i++) {
                                                ?>
                                                    <input onclick="radioschange(event)" class="radios" id="radio<?php echo $i ?>" type="radio" name="estrellas" value="<?php echo $count_aux ?>"><label for="radio<?php echo $i ?>">★</label>
                                                <?php
                                                    $count_aux -= 1;
                                                }
                                                $count_radio += 5;
                                                ?>
                                            </p>
                                            <input disabled onclick="ocultar(event)" id="submit_btn<?php echo $count ?>" class="btn-showcase" type="submit" value="Enviar">
                                            <script>
                                                function radioschange(e) {
                                                    console.log(e);
                                                    const boton = document.getElementById('submit_btn<?php echo $count ?>');
                                                    var value = e.target.value;
                                                    var var_id = e.target.id;
                                                    var nro_boton = "submit_btn";
                                                    var substr_id = parseInt(var_id.substr(5, 1));
                                                    var count_id = <?php echo $count ?>;
                                                    var inicial = 1;
                                                    var final = 5;
                                                    console.log(count_id);
                                                    for (i = 1; i <= count_id; i++) {
                                                        if (substr_id >= inicial && substr_id <= final) {
                                                            nro_boton += i;
                                                        }
                                                        inicial += 5;
                                                        final += 5;
                                                    }
                                                    console.log(nro_boton);
                                                    if (value >= 1 && nro_boton != "submit_btn") {
                                                        document.getElementById(nro_boton).disabled = false;
                                                    }
                                                }

                                                function ocultar(e) {

                                                    var id= e.target.id;
                                                    document.getElementById(e.target.id).style.display = 'none';
                                                    const valores = JSON.parse(localStorage.getItem('Ingenieria Industrial'))
                                                    valores.map((item, index) => {
                                                        if (item.id === id) {
                                                            item.estado = 1;
                                                        }
                                                    })
                                                    localStorage.setItem('Ingenieria Industrial', JSON.stringify(valores));
                                                }
                                            </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                <?php mysqli_free_result($resultado); ?>
            </div>
        </div>
        <script>
            const proyecto = "Ingenieria Industrial";
            localStorage.setItem(proyecto, JSON.stringify(array_titulos));

            function validar_calificacion(id) {

                const valores = JSON.parse(localStorage.getItem('Ingenieria Industrial'))
                valores.map((item, index) => {
                    if (item.id === id) {
                        item.estado = 1;
                    }
                })
                localStorage.setItem('Ingenieria Industrial', JSON.stringify(valores));
            }
        </script>
        <!--FOOTER-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <h3>
                            <figure class="logo-footer">
                                <img src="http://www.univalle.edu/lapaz/storage/app/media/img/dLP.png">
                            </figure>
                        </h3>
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

                            <li><a target="_blank" href="https://www.facebook.com/univallelpz/?ref=br_rs"><span>
                                        <ion-icon class="icon-" name="logo-facebook"></ion-icon> Facebook La Paz
                                    </span></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/univalle_lapaz/"><span>
                                        <ion-icon class="icon-" name="logo-instagram"></ion-icon> Instagram Univalle
                                    </span></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/user/univallebolivia"><span>
                                        <ion-icon class="icon-" name="logo-youtube"></ion-icon> Youtube Univalle
                                    </span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/appvideo.js?v13"></script>
    <script src="../js/funciones.js"></script>
</body>

</html>