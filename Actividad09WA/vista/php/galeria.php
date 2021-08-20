<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="vista/css/estilo.css">
        <title>Conexion a BD</title>
    </head>
    <body>
        <header> 
             <center>
    <section class="seccion">
     <h1>"LUMAR"</h1>
 </section>
</header>
        <nav id="seccion1">
        <?php 
                if(!isset($_SESSION['usuario'])){
        ?>
            <a href="?peticion=home">Inicio</a>
            <a href="?peticion=galeria">Galería</a>
            <a href="?peticion=IniciarSesion">Iniciar sesión</a>
        <?php
            }else{
        ?>
            <a id="seccion1" href="?peticion=perfilCliente">Perfil</a>
            <a id="seccion1" href="?peticion=galeria">Galeria</a>
            <a id="seccion1" href="?peticion=cerrar">Cerrar Sesion</a>
        <?php
            }
        ?>
        </nav>
        <section>
            <h2>Galeria</h2>
            <?php
                while($fila = $valores->fetch_assoc()){
                    echo '<div id="productos">
                    <img src="'.$fila['foto'].'" />
                    <h3>Modelo</h3>
                    <span>'.$fila['modelo'].'</span>
                    <h3>Nombre</h3>
                    <span>'.$fila['nombre'].'</span>
                    <h3>Descripción</h3>
                    <span>'.$fila['descripcion'].'</span>
                    <h3>Precio</h3>
                    <span>'.$fila['precio'].'</span>
                    </div>';
                }
            ?>
        </section>
    </body>
</html>