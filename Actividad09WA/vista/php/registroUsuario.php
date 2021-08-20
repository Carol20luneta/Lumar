<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/estilos.css">
    <title>LUMAR</title>
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
        <h2 id="espacio">Introduce tus Datos</h2></center>
    <form class="form" method="post" action="" enctype="multipart/form-data">
        <center>
        <br><input type="text" name="nombre" placeholder="Introduce tu nombre">
        <br>
        <br><input type="email" name="correo" placeholder="Introduce tu correo">
        <br>
        <br><input type="password" name="contrasena" placeholder="Introduce tu contraseña">
        <br>
        <input type="hidden" name="peticion" value="ingresar">
        <br><label>Seleccione una foto</label>
        <input type="file" name="foto">
        <br>
        <input type="hidden" name="peticion" value="guardarUsuario">
        <br>
        <input type="reset" name="borrar" value="Eliminar">
        <input type="submit" onclick="encriptar()" value="Guardar">     
         
    </form>
    <p>
        <?php
        if(isset($nombre)){
            if($datos)
                echo 'El registro se realizó correctamente';
            else
            echo 'No se realizó el registro de manera correcta';
        }
        ?>
    </p>
    </center>  

</body>
</html>