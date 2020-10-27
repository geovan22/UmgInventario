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
	}
?>