<?php
	class Usuario  
    {
        private $conexion;
        
        public function __construct() 
        {
            $this->conexion=New Conexion();    
        }
        
        public function BuscarUsuario($user, $pass)
        {
            $query="SELECT  U.id, 
                            U.Nombre, 
                            U.Apellido, 
                            U.User_2 as User, 
                            P.Puesto, 
                            U.Estado 
                    FROM Usuario U, 
                         Puesto P 
                    WHERE   U.id=P.id 
                    AND U.User_2='$user' 
                    AND U.Pass='$pass';
            ";
            $resultado=$this->conexion->query($query);
            $this->conexion->close();
            return ($resultado);      
        }
        
        public function VerPuestos() 
        {
            $query="SELECT  *
                    FROM 
                    Puesto
            ";
            $resultado=$this->conexion->query($query);
            $this->conexion->close();
            return ($resultado); 
        }
        
        public function CrearUsuario($Puesto_id, $Nombre, $Apellido, $FechaNac, $Pass, $User) 
        {
            $query="INSERT INTO Usuario (Puesto_id, 
                                         Nombre, 
                                         Apellido, 
                                         FechaNac, 
                                         Pass, 
                                         User_2
                                        )
                                VALUES (
                                            '$Puesto_id', 
                                            '$Nombre', 
                                            '$Apellido', 
                                            '$FechaNac', 
                                            '$Pass', 
                                            '$User'
                                       )
            ";
            $resultado=$this->conexion->query($query);
            $this->conexion->close();
            return ($resultado); 
        }
    }
?>