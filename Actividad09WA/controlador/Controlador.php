<?php
    //Controlador
    $peticion= 'home';
    extract($_REQUEST);
        switch($peticion){
            case 'home':
                require_once 'vista/php/inicio.php';
            break;

            case 'terminos':
                require_once 'vista/php/terminos.php';
            break;

            case 'privacidad':
                require_once 'vista/php/privacidad.php';
            break;

            case 'contact':
                require_once 'vista/php/contact.php';
            break;

            case 'InicioSesion':
                require_once 'vista/php/InicioSesion.php';
            break;

            case 'registroUsuario':
                require_once 'vista/php/registroUsuario.php';
            break;

            case 'guardarUsuario':
                require_once 'modelo/Cls_usuarios.php';
                $objUsario= new Usuario();
                $objUsario->setDatos($correo,$nombre,$contrasena,$_FILES);
                $datos=$objUsario->insertarUsuarios();
                require_once 'vista/php/registroUsuario.php';
            break;

                default: 
                header('Location:vista/php/inicio.php');
        }
?>