<?php
require 'database.php';

$message = '';

if (!empty($_POST['correo']) && !empty($_POST['contrasena'])){
    $sql = "INSERT INTO USUARIOS (NOMBRE,APELLIDO, INSTITUTO,CORREO,CONTRASENA)
    VALUES (:nombre,:apellido,:instituto,:correo,:contrasena)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $stmt->bindParam(':apellido',$_POST['apellido']);
    $stmt->bindParam(':instituto',$_POST['instituto']);
    $stmt->bindParam(':correo',$_POST['correo']);
    $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena',$password);

    if ($stmt->execute()) {
        $message = 'Succesfully creates new user';
    }else {
        $message = 'Sorry there must have been an issue creating';
    }
}
?>

<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset = "UTF-8">
    <tittle></tittle>
    <meta name = "viewport" content = "width=device-width,
     user-scalable=yes, initial-scale=1.0, maxium-scale=3.0, minium-scale=1.0"> <!--es para que la pantalla sea escalable en otro dispositivo-->
     <script src="https://kit.fontawesome.com/cdb9593685.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="php-login/css/estilo.css">
</head>
<body>
<?php require 'header.php' ?>

<?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    
    <form action="signup.php" method="post" class="formulario">
        <h1>Registrate</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user-edit icon"></i> <!--icono de usuario-->
                <input type="text" name="nombre" placeholder="Nombre">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user-edit icon"></i> <!--icono de usuario-->
                <input type="text" name="apellido" placeholder="Apellidos">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-graduation-cap icon"></i> <!--icono de usuario-->
                <label for="Tipo" class="form-control"></label>
                <select name="instituto" id="escuela">
                  <option value="INSTITUTO TECNOLÓGICO DE NUEVO LAREDO">INSTITUTO TECNOLÓGICO DE NUEVO LAREDO</option>
                  <option value="UNIVERSIDAD TECNOLÓGICA">UNIVERSIDAD TECNOLÓGICA</option>
                  <option value="UNIVERSIDAD AUTÓNOMA DE TAMAULIPAS">UNIVERSIDAD AUTÓNOMA DE TAMAULIPAS</option>
                  <option value="ESCUELA NORMAL URBANA CUAUHTÉMOC">ESCUELA NORMAL URBANA CUAUHTÉMOC</option>
                  <option value="UNIVERSIDAD TECMILENIO">UNIVERSIDAD TECMILENIO</option>
                  <option value="OTRO...">OTRO...</option>
                </select>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i> <!--icono de mensaje-->
                <input type="text" name="correo" placeholder="E-mail">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i> <!--icono de password-->
                <input name="contrasena" type="password" placeholder="Contraseña">

            </div>
            <input type="submit" value="Resgitrate" class="button">
            <p>Al registrarte, aceptas nuestras condiciones de uso y Política de privacidad.</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="login.php" >Iniciar Sesion</a></p>
        </div>
    </form>
</body>
</html>