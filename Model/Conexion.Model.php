<?php
	class Conexion extends mysqli
	{
		function __construct()
		{
			$server="localhost";
			$pass="";
			$user="root";
			$base="umginventario";
			parent::__construct($server,$user,$pass,$base);
			$this->query("SET NAMES 'utf8';");
			$this->connect_errno ? die('Error en la conexion') : $error='<br/>Conectado<br/>';
            //echo $error;
			unset ($error);
		}
        
        public function Vitacora($user,$transaccion,$descripcion,$otro)
        {
            $fecha=date("Y-m-d");
            $query="INSERT INTO Vitacora(Usuario_id, Transaccion, Descripcion, Otro, Fecha) VALUES('$user','$transaccion',$descripcion,'$otro','$fecha');"; 
        }
	}
?>