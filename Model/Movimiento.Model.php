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
                INSERT INTO MovimientoInventario
                (
                    Inventario_id, Usuario_id, TipoMovimiento_id, Descripcion, Cantidad, Fecha
                )
                VALUES
                (
                    '$Inventario_id', '$Usuario_id', '$TipoMovimiento_id', '$Descripcion', '$Cantidad', '$fecha'
                );
            ";
            $resultado=$conexion->query($query);
            $conexion->close();
            return $resultado;
        }
        
        public function ActualizarInventario($id, $cantidad,$tipo) 
        {   
            $conexion=New Conexion();
            if($tipo==1)
            {
                $query="UPDATE `Inventario` SET `Cantidad`=`Cantidad`+'$cantidad' WHERE `id`='$id';";
            }
            else
            {
                $query="UPDATE `Inventario` SET `Cantidad`=`Cantidad`-'$cantidad' WHERE `id`='$id';";   
            }
            $resultado=$conexion->query($query);
            $conexion->close();
            return $resultado;
                
        }
        
        public function VerTipoMovimientos() 
        {
            $conexion=New Conexion();
            $query="
                SELECT *
                FROM TipoMovimiento;
            ";
            $resultado=$conexion->query($query);
            $conexion->close();
            return $resultado;
        }
        
        public function BuscarMovFecha($tipo, $fechaIn, $fechaFin) 
        {
            //$fi=date_format($fechaIn,"Y-m-d");
            //$ff=date_format($fechaFin,"Y-m-d");
            
            $conexion=New Conexion();
            $query="
                SELECT U.User_2, T.Movimiento,I.Nombre,M.Descripcion,M.Cantidad, M.Fecha
                FROM MovimientoInventario M,
                	 Usuario U,
                     TipoMovimiento T,
                     Inventario I
                WHERE M.TipoMovimiento_id='$tipo'
                      AND U.id=M.Usuario_id
                      AND T.id=M.TipoMovimiento_id
                      AND I.id=M.Inventario_id
                      AND M.Fecha BETWEEN '$fechaIn' AND '$fechaFin'    
            ";
            $resultado=$conexion->query($query);
            $conexion->close();
            return $resultado;
        }
    }
?>