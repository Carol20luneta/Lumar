<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vista/css/estilos.css">
    <title>LUMAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link type="image/jpg" rel="shortcut icon" href="vista/media/logo.png"/>
  </head>
<body background="vista/media/nubes.jpg">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <div id="main">
        <nav>
            <img src="vista/media/logo.png">
            <ul>
                <li><a href="?peticion=home">Home</a></li>
                <li><a href="?peticion=terminos">Terminos y Condiciones</a></li>
                <li><a href="?peticion=privacidad">Aviso de Privacidad</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="?peticion=contact">Contact</a></li>
                <li><a href="?peticion=InicioSesion">Inicio Sesión</a></li>
            </ul>
        </nav>
    </div>

    <!--Header con carrucel-->
    <header>
      <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="vista/media/carrucel1.jpg" height="380" class="d-block w-100" alt="Uno">
        </div>
        <div class="carousel-item ">
          <img src="vista/media/carrucel2.jpg" height="380" class="d-block w-200" alt="Dos">
        </div>
        <div class="carousel-item">
          <img src="vista/media/carrucel3.jpg" height="380" class="d-block w-100" alt="Tres">
        </div>
        <div class="carousel-item">
            <img src="vista/media/ancianitos.jpg" height="380" class="d-block w-200" alt="Cuatro">
          </div>
        <div class="carousel-item">
            <img src="vista/media/niños.jpg" height="380" class="d-block w-100" alt="Cinco">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
    </section>
      </header>

      <!--Sección 1 de Topics-->
      <div class="seccion1">
        <figure id="imagen1">
          <img src="vista/media/iconito1.jpg" />
          <figcaption>
            Somos una organización sin fines de lucro con la misión de buscar el benefico de las personas que se encuentran en situación de calle, 
            se canaliza con el personal adecuado para ser tratado.
          
          </figcaption>
        </figure>
        
        <figure id="imagen2">
          <img src="vista/media/iconito2.png" />
          <figcaption>
            Nos sostenemos por donaciones voluntarias y de empresas u organiaciones privadas. Ademas de algunos productos elaborados por los residentes para generar
            un banco de ahorro para ellos.
          </figcaption>
        </figure>	
            
        <figure id="imagen3"	>
          <img  src="vista/media/iconito3.jpg" alt="Organización"/>
          <figcaption>
            Puedes apoyarnos haciendo voluntariado y por medio de donaciones, te animamos a visitarnos o llenar un formulario para hablar con nuestro personal
            en la sección de "contact".
          </figcaption>
        </figure>

      </div>
      <!--Sección 2 de Fotos-->
      <div class="seccion2">
        <p id="one"><img   src="vista/media/foto6.png" alt="Niño"/></p>
        <p id="two"><img   src="vista/media/foto2.jpg" alt="Ancianita"/></p>
        <p id="four"><img  src="vista/media/foto4.jpg" alt="Señora"/></p>
        <p id="five"><img  src="vista/media/foto5.jpg" alt="Niña"/></p>
      </div>

      <!--Footer-->
      <footer>
       <p id="liga1"><a href="https://www.instagram.com/"><img   src="vista/media/insta.jpg" alt="Instagram"/></a></p>
        <p id="liga2"><a href="https://www.google.com/maps/place/Cadipsi/data=!4m5!3m4!1s0x8428b204ec69520b:0xaa125c05d9a0b555!8m2!3d20.6577948!4d-103.3487582?authuser=0&hl=es&rclk=1"><img   src="vista/media/ubicacion.jpg" alt="Ubicacion"/></a></p>
        <p id="liga3"><a href="https://www.facebook.com/casaderetirorenacer"><img src="vista/media/face.jpg" alt="Facebook"/></a></p>   
      </footer>
</body>

</html>
<?php

?>