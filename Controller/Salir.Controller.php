<?php
	class Salir
    {
        private $smarty;
        private $libreria;
        
        public function __construct() 
        {
            $this->smarty = new Smarty();
            $this->libreria=new Library();
            session_start();        
        }
        
        public function CerrarSesion() 
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['id']);
            session_destroy();
            
            $mensaje=$this->libreria->Mensajes("secondary","Sign In");
            $this->smarty->assign('mensaje',$mensaje);
            $this->smarty->assign('title',"Home");
            $this->smarty->display('Master.tpl');
        }

    }
?>