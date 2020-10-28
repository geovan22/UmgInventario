<?php
	class Movimiento
    {
        private $conexion;
        
        public function __construct() 
        {
                
        }
        
        public function BuscarMovimiento($movimiento) 
        {
            $conexion=New Conexion();
            $query="
                SELECT *
                FROM TipoMovimiento
                WHERE Movimiento='$movimiento';
            ";
            $resultado=$conexion->query($query);
            $conexion->close();
            return $resultado;
        }
        
        public function GuardarMovimiento($Inventario_id, $Usuario_id, $TipoMovimiento_id, $Descripcion, $Cantidad) 
        {
            $conexion=New Conexion();
            $fecha=date("Y-m-d"); 
            $query="
                NSERT INTO MovimientoInventario
                (
                    Inventario_id, Usuario_id, TipoMovimiento_id, Descripcion, Cantidad, Fecha
                )
                VALUES
                (
                    '$Inventario_id', '$Usuario_id', '$TipoMovimiento_id', '$Descripcion', '$Cantidad', '$fecha'
                );
            ";
            $resultado=$conexion->query($query);
            echo $query."<br /><br />";
            var_dump($resultado);
            $conexion->close();
            
        }
    }
?>