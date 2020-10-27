<?php
	class Library
    {
        public function __construct() 
        {
            
        }
        
        public function PrerarConsulta($consulta)
        {
            if($consulta)
            {
                $ar=array();
    			while ($row=mysqli_fetch_assoc($consulta))
    			{
    			    
    				array_push($ar,$row);
    			}
    			return $ar;
            }
            else
            {
                return false;
            }
        } 
        
        public function Mensajes($tipo,$mensaje)
        {
            if($tipo=='secondary')
                return '<div class="p-3 mb-2 bg-secondary text-white">'.$mensaje.'</div>'; 
            else if($tipo=='success')
                return '<div class="p-3 mb-2 bg-success  text-white">'.$mensaje.'</div>'; 
            else if($tipo=='danger')
                return '<div class="p-3 mb-2 bg-danger   text-white">'.$mensaje.'</div>'; 
            else if($tipo=='warning')
                return '<div class="p-3 mb-2 bg-warning  text-white">'.$mensaje.'</div>'; 
            else if($tipo=='info')
                return '<div class="p-3 mb-2 bg-info   text-white">'.$mensaje.'</div>'; 
            else if($tipo=='light')
                return '<div class="p-3 mb-2 bg-light   text-white">'.$mensaje.'</div>'; 
            else if($tipo=='dark')
                return '<div class="p-3 mb-2 bg-dark   text-white">'.$mensaje.'</div>'; 
            else if($tipo=='white')
                return '<div class="p-3 mb-2 bg-white    text-white">'.$mensaje.'</div>';
            else if($tipo=='transparent')
                return '<div class="p-3 mb-2 bg-transparent    text-white">'.$mensaje.'</div>';
            else
                return '<div class="p-3 mb-2 bg-primary    text-white">'.$mensaje.'</div>';                   
        }

    }
?>