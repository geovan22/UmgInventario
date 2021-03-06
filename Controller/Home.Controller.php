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
            $this->usuario =new Usuario();
        }
        
        public function Inicio() 
        {
            $mensaje=$this->libreria->Mensajes("secondary","Sign In");
            $this->smarty->assign('mensaje',$mensaje);
            $this->smarty->assign('title',"Home");
            $this->smarty->display('Master.tpl');
        }
        
        public function Login()
        {   //$this->usuario =new Usuario();
            $user=$this->usuario->BuscarUsuario($_POST['user'],$_POST['password']);
            if($user!=false)
            {
                if($user->num_rows==1)
                {
                    session_start();
                    $us=$this->libreria->PrerarConsulta($user);
                    if($us[0]['Estado'])
                    {
                        $vista=$us[0]['Puesto'];
                        $_SESSION['usuario']=$us[0]['User'];
                        $_SESSION['id']=$us[0]['id'];
                        
                        $mensaje=$this->libreria->Mensajes("transparent",$_SESSION['usuario']);
                        $this->smarty->assign('vista',$vista);
                        $this->smarty->assign('mensaje',$mensaje);
                        $this->smarty->assign('title',$vista);
                        $this->smarty->display('Master.tpl');
                        
                    }
                    else
                    {
                        $mensaje=$this->libreria->Mensajes
                        ("warning","Usuario Dado de Baja").
                        $this->libreria->Mensajes("secondary","Comuniquese con el administrador");
                        $this->smarty->assign('mensaje',$mensaje);
                        $this->smarty->assign('title',"Home");
                        $this->smarty->display('Master.tpl');
                    }
                }
                else if($user->num_rows>1)
                {
                    $mensaje=$this->libreria->Mensajes
                        ("warning","Usuario Duplicado").
                        $this->libreria->Mensajes("secondary","Comuniquese con el administrador");
                        
                        $this->smarty->assign('mensaje',$mensaje);
                        $this->smarty->assign('title',"Home");
                        $this->smarty->display('Master.tpl');
                }
                else
                {
                    $mensaje=$this->libreria->Mensajes("danger","Datos Erroneos<br />Intente nueva mente");
                    $this->smarty->assign('mensaje',$mensaje);
                    $this->smarty->assign('title',"Home");
                    $this->smarty->display('Master.tpl');
                }
            }
            else
            {
                
            }
        }
    }    
?>