<?php
require_once 'helper/Cls_Conexion.php';
//Entidad de productos
//Clase de productos
class Producto{
    //Declaracion de los atributos de la entidad usuario.
    private $_modelo, $_nombre, $_descripcion, $_precio, $_stock, $_foto, $_estatus;

    public function SetDatos($modelo, $nom, $descrip, $precio, $stock, $foto){
        $this->_modelo=$modelo;
        $this->_nombre=$nom;
        $this->_descripcion=$descrip;
        $this->_precio=$precio;
        $this->_stock=$stock;
        $this->_foto=$foto;
        //Perfil a utilizar es Administrador=1 y Cliente=2.
        //El estatus Inactivo=0 y Activo=1.
    }

    public function insertarProductos(){
        try{
            $nombreFoto=$this->_foto['foto']['name'];
            $ruta='vista/catalogo/productos/productos'.$nombreFoto;
            move_uploaded_file($this->_foto['foto']['tmp_name'],$ruta);
            //inserción de datos en la base de datos
            $sql="insert into productos values ('$this->_modelo','$this->_nombre','$this->_descripcion','$this->_precio', '$this->_stock', '$ruta',1)";
            $res=$this->_aplicarQuery($sql);
            return $res;
        }catch(Exception $e){
            echo "Error en la consulta".$e->getMessage();
        }
    }

    public function productos(){
        $sql="select * from productos where estatus = 1";
        $res= $this->_aplicarQuery($sql);
        return $res;
    }

    public function cancelarProducto(){
        $sql = "update productos set estatus = 0 where modelo = '$this->_modelo'";
        $this->_aplicarQuery($sql);
        return;
    }

    public function localizarProducto(){
        $sql = "select modelo,nombre,descripcion,precio,stock,foto from productos where modelo = '$this->_modelo'";
        $res = $this->_aplicarQuery($sql);
        $valores = $res->fetch_assoc();
        return $valores;
    }

    public function cambiarProducto(){
        $sql="update productos set 
        nombre = '$this->_nombre',
        descripcion = '$this->_descripcion',
        precio = $this->_precio,
        stock = $this->_stock where modelo = '$this->_modelo'";
        $this->_aplicarQuery($sql);
        return;
    }
    
    public function _aplicarQuery($consulta){
        $objConexion= new Conexion();
        $res=$objConexion->ejecutarConsulta($consulta);
        $objConexion->cerrarConexion();
        return $res;
    }
}
?>