<?php
include "validarSesion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pallamen</title>
    <link rel="icon" href="../../Imagenes/Iconos/LogoPallamen1.png">
    <link rel="stylesheet" href="../../HojasDeEstilos/HSCabecera.css">
    <link rel="stylesheet" href="../../HojasDeEstilos/Registrarse_IniciarSesion/MiCuenta.css">
    
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
    <!-- <h1>!HOLA! <?php echo "$verSesion" ?> </h1> -->







    <?php

    // Conexión con la base de datos.
    $LugarBD = "localhost";
    $Usuario = "root";
    $ContraseñaBD = "";
    $NombreBD = "usuarios";

    $nombreTabla = "usuariosregistrados";

    $conex = mysqli_connect($LugarBD,$Usuario,$ContraseñaBD,$NombreBD);

    $sql = "SELECT * FROM usuariosregistrados";
    $resultadoConsulta = $conex->query($sql);

    $nombre;
    $apellidos;
    $email;
    $contraseña;
    $telefono;
    $fechCreacion;

    while($intro = $resultadoConsulta->fetch_assoc()){

        $nombreUsuarioBD = $intro['nombre'];


        if($nombreUsuarioBD == $verSesion){
            
            $nombre = $intro['nombre']; 
            $apellidos = $intro['apellidos'];
            $email = $intro['email'];
            $contraseña = $intro['contraseña'];
            $telefono = $intro['telefono'];
            $fechCreacion = $intro['fecha_creacion'];
        }
    }

    ?>
    <!-- <h2>Nombre: <?php echo $nombre ?></h2>
    <h2>Apellidos: <?php echo $apellidos ?></h2>
    <h2>Email: <?php echo $email ?></h2>
    <h2>Contraseña: <?php echo $contraseña ?></h2>
    <h2>Telefono: <?php echo $telefono ?></h2>
    <h2>Fecha de creación: : <?php echo $fechCreacion ?></h2>
    <form action="" method="post"><button name="CerSes">Cerrar sesión</button></form> -->

    <section>


        <div id="MisDatos">
            <h3>Mis datos</h3>
            <canvas></canvas>
        </div>

        <div id="Informacion">
            <img src="../../Imagenes/Iconos/Persona.png" alt="">
            <p>Nombre: <?php echo $nombre ?> <?php echo $apellidos ?></p>
            <p>Correo electrónico: <?php echo $email ?></p>
            <p>Contraseña: <?php echo $contraseña ?></p>
            <p>Teléfono: <?php echo $telefono ?></p>
            <p>Creación de la cuenta: <?php echo $fechCreacion ?></p>
        </div>

        <div id="Part3">

            <p>Pedidos: </p>    
            
            <button>Cambiar datos</button>
            <form action="" method="post"><button name="CerSes">Cerrar sesión</button></form>

        </div>




    </section>




    <?php

if(isset($_POST['CerSes'])){
    CerrarSesion();
}

    ?>
</body>
</html>

