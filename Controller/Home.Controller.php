<?php
    class Home
    {
        private $smarty;
        private $usuario;
        Private $libreria;
        public function __construct() 
        {
            $this->smarty = new Smarty();
            $this->libreria=new Library();
        }
        
        public function Inicio() 
        {
            $mensaje=$this->libreria->Mensajes("transparent","Sign In");
            $this->smarty->assign('mensaje',$mensaje);
            $this->smarty->assign('title',"home");
            $this->smarty->display('index.tpl');
        }
        
        public function Login()
        {   $this->usuario =new Usuario();
            $usuario=$this->usuario->BuscarUsuario($_POST['user'],$_POST['password']);
            //var_dump($usuario);
            if($usuario!=false)
            {
                if($usuario->num_rows==1)
                {
                    session_start();
                    $us=$this->libreria->PrerarConsulta($usuario);
                    if($us[0]['Estado'])
                    {
                        $vista=$us[0]['Puesto'];
                        $_SESSION['usuario']=$us[0]['User'];
                        $_SESSION['id']=$us[0]['id'];
                        
                    }
                    else
                    {
                        $mensaje=$this->libreria->Mensajes
                        ("warning","Usuario Dado de Baja").
                        $this->libreria->Mensajes("secondary","Comuniquese con el administrador");
                        $this->smarty->assign('mensaje',$mensaje);
                        $this->smarty->assign('title',"home");
                        $this->smarty->display('index.tpl');
                    }
                }
                else if($usuario->num_rows>1)
                {
                    $mensaje=$this->libreria->Mensajes
                        ("warning","Usuario Duplicado").
                        $this->libreria->Mensajes("secondary","Comuniquese con el administrador");
                        
                        $this->smarty->assign('mensaje',$mensaje);
                        $this->smarty->assign('title',"home");
                        $this->smarty->display('index.tpl');
                }
                else
                {
                    $mensaje=$this->libreria->Mensajes("danger","Datos Erroneos<br />Intente nueva mente");
                    $this->smarty->assign('mensaje',$mensaje);
                    $this->smarty->assign('title',"home");
                    $this->smarty->display('index.tpl');
                }
            }
            else
            {
                
            }
        }
    }    
?>