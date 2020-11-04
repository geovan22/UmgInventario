<?php
	class Encargado
    {
        private $smarty;
        Private $libreria;
        Private $inventario;
        private $movimiento;
        
        public function __construct() 
        {
            $this->smarty = new Smarty();
            $this->libreria=new Library();
            $this->inventario=new Inventario();
            $this->movimiento=new Movimiento();
            //session_start();
        }

        public function Vistas() 
        {
            $vista=$_GET['vista'];
            
            if($vista=='Inventario')
            {
                $vista=$_GET['vista'];
                $productos=$this->libreria->PrerarConsulta($this->inventario->VerInventario());
                
                $this->smarty->assign('inventario',$productos);
            }
            else if($vista=='Movimiento')
            {
                $vista=$_GET['vista'];
                $mov=$this->libreria->PrerarConsulta($this->movimiento->VerTipoMovimientos());
                $this->smarty->assign('tipo',$mov);
            }
            else
            {
                
            }
            
            $mensaje=$this->libreria->Mensajes("transparent",$_SESSION['usuario']);
            $this->smarty->assign('vista',$vista);
            $this->smarty->assign('mensaje',$mensaje);
            $this->smarty->assign('title',"Encargado");
            $this->smarty->display('Master.tpl');
        }
        
        public function BuscarMovimiento() 
        {
            $movimientos=$this->libreria->PrerarConsulta($this->movimiento->BuscarMovFecha($_POST['tipo'],$_POST['de'],$_POST['hasta']));
            
            
            $mov=$this->libreria->PrerarConsulta($this->movimiento->VerTipoMovimientos());
            $this->smarty->assign('tipo',$mov);
            
            $this->smarty->assign('movimiento',$movimientos);
            $mensaje=$this->libreria->Mensajes("transparent",$_SESSION['usuario']);
            $this->smarty->assign('vista','Movimiento');
            $this->smarty->assign('mensaje',$mensaje);
            $this->smarty->assign('title',"Encargado");
            $this->smarty->display('Master.tpl');
           
        }
    }
?>