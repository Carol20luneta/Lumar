<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" type="text/css" href="vista/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="vista/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link type="image/jpg" rel="shortcut icon" href="vista/media/logo.png"/>
  </head>
<body background="vista/media/globos.jpg">
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
                <li><a href="?peticion=contact">Contacto</a></li>
                <li><a href="?peticion=InicioSesion">Inicio Sesión</a></li>
            </ul>
        </nav>
    </div>
</head>

    <div class="contenedor">
        <form action="" class="form">
            <div class="form-header">
                <h1 class="form-title">C<span>ontacto</span></h1>
            </div>
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" id="nombre" class="form-input" placeholder="Escriba su nombre">

            <label for="dirección" class="form-label">Dirección</label>
            <input type="text" id="nombre" class="form-input" placeholder="Escriba su dirección">

            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="text" id="nombre" class="form-input" placeholder="Escriba su correo">

            <label for="mensaje" class="form-label">Mensaje</label>
            <input type="text" id="nombre" class="form-input" placeholder="Aquí escriba su mensaje">

            <input type="submit" class="btn-submit" value="Enviar consulta">

        </form>
    </div>
</body>
</html>