<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pallamen</title>
    <link rel="icon" href="../../Imagenes/Iconos/LogoPallamen1.png">
    <link rel="stylesheet" href="../../HojasDeEstilos/HSCabecera.css">
    <link rel="stylesheet" href="../../HojasDeEstilos/Registrarse_IniciarSesion/IniciarSesion.css">
    
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

        <div id="iniSesion">

            <form method="post">
                <h1>Iniciar sesión</h1>
                <input name = "nombreIntroducido" type="text" placeholder="Nombre de usuario"><br>
                <input name = "contraseñaIntroducida" type="text" placeholder="Contraseña"><br>
                <button>Registrarse</button>
                <button name='biniSesion'>Iniciar sesion</button>
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

    $sql = "SELECT * FROM usuariosregistrados";
    $resultadoConsulta = $conex->query($sql);

    if(isset($_POST['biniSesion'])){

        //Extraemos los datos
        $nombreIntroducido = trim($_POST['nombreIntroducido']);
        $contraseñaIntroducida = trim($_POST['contraseñaIntroducida']);

        //Consultamos las coincidencias
    while($intro = $resultadoConsulta->fetch_assoc()){

        $nombreUsuarioBD = $intro['nombre'];
        $ContraseñaUsuarioBD = $intro['contraseña'];
        
        if($nombreUsuarioBD == $nombreIntroducido and $ContraseñaUsuarioBD == $contraseñaIntroducida){
            
            session_start();
            $_SESSION['usuario'] = $nombreIntroducido;
            header("Location:miCuenta.php");

        }

    }
    }
    ?>
</body>
</html>