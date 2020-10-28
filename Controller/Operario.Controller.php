<?php
	class Operario
    {
        private $smarty;
        Private $libreria;
        Private $inventario;
        
        public function __construct() 
        {
            $this->smarty = new Smarty();
            $this->libreria=new Library();
            $this->inventario=new Inventario();
            //session_start();
        }
        
        public function Vistas()
        {
            if($_GET['vista']=='Inventario')
            {
              $categoria=$this->libreria->PrerarConsulta($this->inventario->VerCategoria()); 
              $vista=$_GET['vista'];
              $this->smarty->assign('categoria',$categoria);  
            }
            else if($_GET['vista']=='EntradaSalida')
            {
                $vista=$_GET['vista'];
                $productos=$this->libreria->PrerarConsulta($this->inventario->VerInventario());
                
                $this->smarty->assign('inventario',$productos);
            }
            else
            {
                $vista='default';
            }
            
            $mensaje=$this->libreria->Mensajes("transparent",$_SESSION['usuario']);
            $this->smarty->assign('vista',$vista);
            $this->smarty->assign('mensaje',$mensaje);
            $this->smarty->assign('title',"Operario");
            $this->smarty->display('Master.tpl');
        }
        
        public function GuardarProducto()
        { 
             $this->inventario->GuardarInventario($_SESSION['id'],$_POST['nombre'],$_POST['descripcion'],$_POST['codigo'],$_POST['categoria'],$_POST['cantidad'],$_POST['precio']);
             
              $categoria=$this->libreria->PrerarConsulta($this->inventario->VerCategoria()); 
              $vista='Default';
              $this->smarty->assign('categoria',$categoria);
              
              $mensaje=$this->libreria->Mensajes("transparent",$_SESSION['usuario']);
              $this->smarty->assign('vista',$vista);
              $this->smarty->assign('mensaje',$mensaje);
              $this->smarty->assign('title',"Operario");
              $this->smarty->display('Master.tpl');
        }
        
        public function EntradaSalida() 
        {
             $producto=$this->libreria->PrerarConsulta($this->inventario->BuscarProducto($_GET['id']));
             
        }
    }
?>