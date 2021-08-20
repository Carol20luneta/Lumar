<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="vista/js/funcion.js"></script>
    <title>MVC</title>
</head>
<body>
<div id="web">
        <header class="titulo" >
       <hgroup>
         <h1>LUMAR</h1>
         <h3>Bienvenidos</h3>
       </hgroup>
     </header>
     <div>
        <section id="seccion1">
        <nav id="menu">
                  <div class="col-sm-2">
                      
                  </div>
      
          <div id="div1" class="col-sm-8">
          <ul>
            <li><a href="?peticion=home">Inicio</a></li>
                <li><a href="?peticion=InicioSesion">Contacto</a></li>  
           <input placeholder="Buscar... "type="search" name="buscar" id="buscar"/>
               <input type="submit" value="Buscar" id="submit" />    
          </ul>
          </div>
        </nav>
        </section>
        </div>

    <section>
        <center>
        <h2>Login</h2>
        <form method="post" action="">
            <input type="email" name="correo" placeholder="Introduce tu correo"></input>
            <br>
            <br><input type="password" name="contrasena" id="pass" placeholder="Introduce tu contraseña"></input>
            <br>
            <br><input type="hidden" name="peticion" value="ingresar">

            <br><input type="submit" onclick="encriptar()"  value="Ingresar">
        </form>
        <p>
            <!--Validacion de usuario registrado-->
            
        </p>   
        <a href="?peticion=registroUsuario"><h2>Registrate</h2></a> 
    </section>
    </center>
</body>
</html>