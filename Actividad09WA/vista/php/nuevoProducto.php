<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styLesheet" href="vista/css/estilo.css">
    <title>Nueva mercancía de apoyo</title>
</head>
<body>
  
<center>
    <section class="seccion">
     <h1>"LUMAR"</h1>
 </section>

 <section id="seccion1">
 <nav>
    <a href="?peticion=perfilAdmin">Perfil</a>
    <a href="?peticion=registroProducto">Apoyo</a>
    <a href="?peticion=productos">mercancía</a>
    <a href="?peticion=cerrar">Cerrar sesión</a>
</nav>
</section>
</center>

    <fieldset id="formulario">
        <legend>Nuevo Producto</legend>
            <form action="" method="POST" enctype="multipart/form-data">
            <input id="input3" type="text" name="modelo" required placeholder="Modelo">
            <input id="input3" type="text" name="nombreproduct" required placeholder="Nombre">
            <textarea name="descripcion" id="desc" cols="30" rows="10" required placeholder="Descripcion..."></textarea>
            <input id="input3" type="number" name="precio" required placeholder="Precio">
            <input id="input3" type="text" name="stock" required placeholder="Stock">
            <input id="input3" type="file" name="foto" required>
            <input type="hidden" name="peticion" value="guardarproducto">
            <input id="input1" type="submit" onclick="encriptar()" name="guardar" value="Guardar">
            </form>

        <p>
        <?php
          if(isset($modelo)){
            if($datos)
                echo 'El registro se realizo correctamente';
                else
                echo 'No se realizo el registro de manera correcta';
          }
        ?>
        </p>
        </fieldset>
    
</body>
</html>