<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilo.css">
    <script src="vista/js/funcion.js"></script>
    <title>MVC</title>
</head>
<body>
<center>
<section class="seccion">
     <h1>"LUMAR"</h1>
 </section>

 <section id="seccion1">
 <nav>
    <a href="?peticion=home">Inicio</a>
    <a href="?peticion=galeria">Galería</a>
    <a href="?peticion=IniciarSesion">Iniciar sesión</a>
</nav>
</section>

    <section>
    <br>
    <br>
    <br>
        <h2>Login</h2>
        <form method="post" action="">
            <br>
            <br>
            <input type="email" name="correo" placeholder="Introduce tu correo"></input>
            <br>
            <br><input type="password" name="contrasena" id="pass" placeholder="Introduce tu contraseña"></input>
            <br>
            <br><input type="hidden" name="peticion" value="ingresar">

           <a href="?peticion=ingresar"><br><input type="submit" onclick="encriptar()"  value="Ingresar"></a>
        </form>
        <p>
            <!--Validacion de usuario registrado-->
            
            
        </p>   
        <br>
        <a href="?peticion=registroUsuario">Registrate</a> 
        <br>
        <br><a href="?peticion=aviso">Aviso de privacidad</a>
        <br>
        <br><a href="?peticion=terminos">Términos y Condiciones</a>
    </section>
    </center>
</body>
</html>