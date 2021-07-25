<?php
include "Paginas/IniciarSesionyRegistrarse/validarSesion.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pallamen</title>
    <link rel="icon" href="Imagenes/Iconos/LogoPallamen1.png">
    <link rel="stylesheet" href="HojasDeEstilos/HSCabecera.css">
    <link rel="stylesheet" href="HojasDeEstilos/Index/HSIndex.css">
    
</head>
<body>
    <!-- ########## CABECERA ########## -->
    <header>

        <img id="LogoPallamen" src="Imagenes/Iconos/LogoPallamen4.png" alt="">

        <img id="IRSCF" class="IconRedSocialCab" src="Imagenes/Iconos/whatsapp.png" alt="">
        <img class="IconRedSocialCab" src="Imagenes/Iconos/instagram.png" alt="">
        <img class="IconRedSocialCab" src="Imagenes/Iconos/facebook.png" alt="">

        <div>

            <a href="index.php">Inicio</a>
            <a href="">Productos</a>
            <a href="">Nosotros</a>
            <a href="Paginas/Contacto/OpcionesDeContacto.php">Constacto</a>
            <a id="af" href="Paginas/IniciarSesionyRegistrarse/redireccionar_registrarse.php">Usuario</a>
<!-- <a id="af" href="Paginas/IniciarSesionyRegistrarse/Registrarse.php">Usuario</a> -->
        </div>

    </header>
    <!-- ########## CUERPO ########## -->
    <section>

        <div id="Oferta1">
            
            <canvas id="C1"></canvas>
            <canvas id="C2"></canvas>

            <img id="Precio" src="Imagenes/Index/Oferta/199€ .png" alt="">
            <button>MAS INFORMACIÓN</button>

            <img src="Imagenes/Fotos/a (20)a.png" alt="">
        </div>
    <!-- ¿Que es lo que busca? -->
        <div id="Productos">
            <h3>¿Que es lo que busca?</h3>
            <canvas class="Linea1"></canvas>

            <img class="Prod" src="Imagenes/Index_MantonesTrajesComplementos/TrajesFlamenca.png" alt="">
            <img class="Prod" src="Imagenes/Index_MantonesTrajesComplementos/Mantones.png" alt="">
            <img class="Prod" src="Imagenes/Index_MantonesTrajesComplementos/Complementos.png" alt="">

        </div>
    <!-- Nosotros -->
        <div id="Nosotros">
            <h3>Nosotros <img class="Icon" src="Imagenes/Iconos/IconoPersonas.ico" alt=""></h3>
            <canvas class="Linea1"></canvas>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                , cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó 
                una galería de textos y los mezcló de tal manera que logró hacer un libro de textos
                 especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno 
                en documentos electrónicos, quedando esencialmente igual al original.
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
                Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500
                , cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó 
                una galería de textos y los mezcló de tal manera que logró hacer un libro de textos
                 especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno 
                en documentos electrónicos, ​quedando esencialmente igual al original. </p>
        </div>
    <!-- Ubicación -->
        <div id="Ubicacion">
            <h3>Ubicación <img class="Icon" src="Imagenes/Iconos/IconoUbicacion.ico" alt=""></h3>
            <canvas class="Linea1"></canvas>
            
            <iframe id="Mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.740645138339!2d-6.154842884369372!3d37.41960464028619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd121420a7df94ad%3A0x88dfccd93e430f0e!2sPallam%C3%A9n%20Complementos%20de%20Flamenca!5e0!3m2!1ses!2ses!4v1625875359267!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    <!-- Nuestra tienda -->
        <div id="NuestraTienda">
            <h3>Nuestra tienda <img class="Icon" src="Imagenes/Iconos/IconoTienda.ico" alt=""></h3>
            <canvas class="Linea1"></canvas>

            <img class="ImgSlider" src="Imagenes/Index/SliderTienda/1.jpg" alt="">
            <img class="ImgSlider" src="Imagenes/Index/SliderTienda/2.jpg" alt="">
            <img class="ImgSlider" src="Imagenes/Index/SliderTienda/3.JPG" alt="">

        </div>


    </section>

</body>
</html>