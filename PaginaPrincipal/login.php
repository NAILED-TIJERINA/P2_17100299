<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset = "UTF-8">
    <tittle></tittle>
    <meta name = "viewport" content = "width=device-width,
     user-scalable=yes, initial-scale=1.0, maxium-scale=3.0, minium-scale=1.0">
     <script src="https://kit.fontawesome.com/cdb9593685.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="php-login/css/estilo.css">
</head>
<body>
    <form action="" method="POST" class="formulario">
    <?php

            if(isset($errorLogin)){
                echo $errorLogin;
            }

       ?>

        <h1>Login</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i> <!--icono de mensaje-->
                <input type="text" name="correo" placeholder="E-mail">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i> <!--icono de password-->
                <input type="password" name="contrasena" placeholder="Contraseña">

            </div>
            <input type="submit" value="Login" class="button">
            <p>Al iniciar sesion, aceptas nuestras condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes cuenta?<a class="link" href="signup.php" >Registrate</a></p>
        </div>
    </form>
</body>
</html>