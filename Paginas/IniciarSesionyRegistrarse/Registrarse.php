<?php
include "validarSesion.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pallamen</title>
    <link rel="icon" href="../../Imagenes/Iconos/LogoPallamen1.png">
    <link rel="stylesheet" href="../../HojasDeEstilos/HSCabecera.css">
    <link rel="stylesheet" href="../../HojasDeEstilos/Registrarse_IniciarSesion/Registrarse.css">
    
</head>
<body>
    <!-- ########## CABECERA ########## -->
    <header>

        <img id="LogoPallamen" src="../../Imagenes/Iconos/LogoPallamen4.png" alt="">

        <img id="IRSCF" class="IconRedSocialCab" src="../../Imagenes/Iconos/whatsapp.png" alt="">
        <img class="IconRedSocialCab" src="../../Imagenes/Iconos/instagram.png" alt="">
        <img class="IconRedSocialCab" src="../../Imagenes/Iconos/facebook.png" alt="">

        <div>

            <a href="../../index.php">Inicio</a>
            <a href="">Productos</a>
            <a href="">Nosotros</a>
            <a href="">Constacto</a>
            <a id="af" href="../../Paginas/IniciarSesionyRegistrarse/Registrarse.php">Usuario</a>

        </div>

    </header>

    <!-- ########## SECTION ########## -->

    <section>
        <div id="Registrarse">

            <form method="post">
                <h1>Registrarse</h1>
                <input name="nombre" type="name" placeholder="Nombre"><br>
                <input name="apellidos" type="family-name" placeholder="Apellidos"><br>
                <input name="email" type="email" placeholder="Correo electronico"><br>
                <input name="contraseña" type="password" placeholder="Contraseña"><br>
                <input name="repContraseña" type="password" placeholder="Repite contraseña"><br>
                <input name="telefono" type="tel" placeholder="Numero de telefono (Opcional)"><br>
                <a href="IniciarSesion.php"><button><a href="IniciarSesion.php">Iniciar Sesion</a></button></a>
                <button name="botonRegistrarse" >Registrarse</button>
                
            </form>

        </div>
    </section>

    <?php

    // Conexión con la base de datos.
    $LugarBD = "localhost";
    $Usuario = "root";
    $ContraseñaBD = "";
    $NombreBD = "usuarios";

    $nombreTabla = "usuariosregistrados";

    $conex = mysqli_connect($LugarBD,$Usuario,$ContraseñaBD,$NombreBD);
    if(isset($_POST['botonRegistrarse'])){
        //Extraemos la información del formulario.
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $telefono = trim($_POST['telefono']);
        $fechaCreacion = date("d/m/y");

        // Comprobamos que los campos no estén bacios
        if(strlen($nombre) >= 2 and strlen($apellidos) >= 1 and strlen($email) >= 3 and strlen($contraseña) >= 5){

            if(strlen($contraseña) == strlen($_POST['repContraseña'])){
                                    // Insertamos la información en la tabla.
        $consulta = "INSERT INTO $nombreTabla(nombre, apellidos, email, contraseña, telefono, fecha_creacion) VALUES ('$nombre','$apellidos','$email','$contraseña','$telefono','$fechaCreacion')";
        $resultadoCon = mysqli_query($conex,$consulta);

        if($resultadoCon){
            ?>
            <h1>Te has inscrito correctamente</h1>
            <?php
        }else{
            ?>
            <h1>Hubo un error</h1>
            <?php
        }
            }else{
                ?>
                <h1>Las contraseñas deben ser iguales</h1>
                <?php
            }

        }else{
            ?>
            <h1>Complete todos los campos correctamente</h1>
            <?php
        }
    }

    ?>

</body>
</html>