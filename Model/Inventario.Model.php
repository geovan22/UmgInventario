<?php
	class Inventario
    {
        public $con;
        
        public function __construct() 
        {
            $this->con=New Conexion();
            session_start();    
        }
        
        public function VerCategoria() 
        {
            $query="SELECT * 
                    FROM Categoria;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;   
        }
        
        public function GuardarInventario($user,$nom, $desc,$cod,$cat,$cant,$pre) 
        {
            $fecha=date("Y-m-d"); 
            $query="INSERT INTO Inventario
                (
                    Categoria_id, Usuario_id, Nombre, Descripcion, Codigo, Precio, Cantidad ,
                    FechaIngreso
                ) 
                VALUES 
                    (
                        '$cat','$user','$nom','$desc','$cod','$pre','$cant','$fecha'
                     );
            ";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
        
        public function VerInventario()
        {
            $query="SELECT I.id,
                           I.Nombre,
                           I.Descripcion,
                           I.Codigo,
                           I.Precio,
                           I.Cantidad,
                           C.Nombre as Categoria  
                FROM Inventario I,
                     Categoria C
                WHERE I.id = C.id
            ;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado; 
        }
        
        public function BuscarProducto($id)
        {
            $query="SELECT I.id,
                           I.Nombre,
                           I.Descripcion,
                           I.Codigo,
                           I.Precio,
                           I.Cantidad,
                           C.Nombre as Categoria  
                FROM Inventario I,
                     Categoria C
                WHERE I.id = C.id
                      AND I.id='$id'  
            ;";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado; 
        }
    }
?>