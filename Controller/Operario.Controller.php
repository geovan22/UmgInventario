<?php
	class Operario
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
            else if($_GET['vista']=='InputOutput')
            {
                $vista=$_GET['vista'];
                $producto=$this->libreria->PrerarConsulta($this->inventario->BuscarProducto($_GET['id']));
                $this->smarty->assign('codigo',$producto[0]['Codigo']);
                $this->smarty->assign('nombre',$producto[0]['Nombre']); 
                $this->smarty->assign('id',$producto[0]['id']);
                $this->smarty->assign('tipo',$_GET['tipo']);  
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
           $tipoMov=$this->libreria->PrerarConsulta($this->movimiento->BuscarMovimiento($_POST['tipo'])); 
           var_dump($tipoMov);
           $res=$this->movimiento->GuardarMovimiento($_POST['idproducto'],$_SESSION['id'],$tipoMov[0]['id'],$tipoMov[0]['Descripcion'],$_POST['cantidad']);  
           
           var_dump($res);
        }
    }
?>