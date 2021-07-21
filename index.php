<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <!--ANIMATECSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <span class="span-bienvenida animate__animated animate__fadeOut animate__delay-1s">BIENVENIDO</span>
    <div class="animate__animated animate__fadeIn animate__delay-2s">
    <div class="login-box">
        <img src="img/logologin.jpg" class="avatar" alt="LogoUnivalle">
        <h1>Ingresa Aqui</h1>
        <form action="php/validacion.php" method="POST">
            <!--Usuario-->
            <label for="username">Nombre de Usuario</label>
            <input type="text" placeholder="Ingresa tu Usuario" name="usuario">

            <!--Contraseña-->
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Ingresa tu Contraseña" name="contraseña">
            <select class="selectrol" name="selectrol">
                <option value="1">Administrador</option>
                <option value="2">Expositor</option>
            </select>
            <input name="visitante" class="hidden-form" type="hidden" value="5">
            <input type="submit" value="Login"> 
        </form>
        <form action="php/validacion_visitante.php" method="POST">
        <span class="span-visitante" for="Visitante">Tambien puedes ingresar sin cuenta haciendo click en el boton <b>Ingreso Libre</b>.</span><br>
        <input name="selectrol" class="hidden-form" type="hidden" value="8">
            <button value="6" name="visitante" class="btn-ingresar">Ingreso Libre</button><br>
        </form>
    </div>
    </div>
</body>
</html>