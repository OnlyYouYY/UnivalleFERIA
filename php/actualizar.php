<?php
include("bd.php");
$id = $_GET["id"];
$usuarios = "SELECT* FROM usuarios WHERE id = '$id'";
$roles = "SELECT* FROM rol";
session_start();
$selectrol = $_SESSION['selectrol'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Enlace con CSS-->
        <link rel="stylesheet" href="../css/datagridview.css">
        <!--GoogleFonts Poppins-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
        <!--GoogleFonts SansSerif-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
        <!--IONICONSV3-->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Actualizar</title>
</head>
<body>
<div class="body2">
    <header class="header">
        <div class="content">
            <img src="../img/logopng.png" alt="LogoUnivalle" class="logo">
            <span class="icon-menu" id="btn_menu"><ion-icon name="menu"></ion-icon></span>
            <nav class="nav" id="nav">
                <ul class="menu">
                <?php if($selectrol == 1){?>
                            <li class="menu__item"><a class="menu__link select"href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link"href="../html/proyectos.php">Proyectos</a></li>
                            <li class="menu__item"><a class="menu__link"href="../html/expositor.php">Expositores</a></li>     
                            <li class="menu__item"><a class="menu__link"href="../html/datagridview.php">Centro de Control</a></li>                  
                            <li class="menu__item"><a class="menu__link"href="">Contactos</a></li>
                        <?php }?>
                        <?php if($selectrol == 2){?>
                            <li class="menu__item"><a class="menu__link select"href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link"href="../html/proyectos.php">Proyectos</a></li>
                            <li class="menu__item"><a class="menu__link"href="../html/expositor.php">Expositores</a></li>                
                            <li class="menu__item"><a class="menu__link"href="">Contactos</a></li>
                        <?php }?>
                        <?php if($selectrol == 3){?>
                            <li class="menu__item"><a class="menu__link select"href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link"href="../html/proyectos.php">Proyectos</a></li>             
                            <li class="menu__item"><a class="menu__link"href="">Contactos</a></li>
                        <?php }?>
                        <?php if($selectrol == 4){?>
                            <li class="menu__item"><a class="menu__link select"href="../paginainicio.php">Inicio<a></li>
                            <li class="menu__item"><a class="menu__link"href="../html/proyectos.php">Proyectos</a></li>                 
                            <li class="menu__item"><a class="menu__link"href="">Contactos</a></li>
                        <?php }?>
                    
                </ul>
            </nav>
        </div>
    </header>
    <div class="content">
        <form class="container-table container-table--edit" action="procesar_actualizar.php" method="POST">
            <div class="table__title table__title--edit">Datos de Usuario</div>
            <div class="table__header">Usuario</div>
            <div class="table__header">Contraseña</div>
            <div class="table__header">Rol</div>
            <div class="table__header">Operacion</div>
            <?php $resultado = mysqli_query($conexion,$usuarios);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <input type="hidden" class="table__item" value="<?php echo $row["id"];?>" name="id">
            <input type="text" class="table__input" value="<?php echo $row["usuario"];?>" name="usuario">
            <input type="text" class="table__input" value="<?php echo $row["contraseña"];?>" name="contraseña">
            <input type="text" class="table__input" value="<?php echo $row["rol_id"];?>" name="rol_id">
            <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
            <?php }?>
            <?php mysqli_free_result($resultado);?>
            
            
            </form>   
    </div>
    <!--FOOTER-->
    <footer class="footer footer-edit">
        <div class="social">
            <a href="#" class="icon-facebook"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#" class="icon-web"><ion-icon name="cloud"></ion-icon></a>
        </div>
        <br>
        <p class="copy">&copy; Univalle La Paz - Bolivia - Todos los derechos reservados</p>
    </footer>
</div>
    <script src="../js/funciones.js"></script>
</body>
</html>
