<?php
    class Home
    {
        private $smarty;
        public function __construct() 
        {
            $this->smarty = new Smarty();
        }
        
        public function Inicio() 
        {
            $this->smarty->assign('title',"home");
            $this->smarty->display('index.tpl');
        }
    }    
?>