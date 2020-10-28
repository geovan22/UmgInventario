<?php
	class VerDocumentos
    {
        public function VerER()
        {        
            $mi_pdf = 'Recursos/DB_Inventario.pdf';
            header('Content-type: application/pdf');
            header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
            readfile($mi_pdf); 
        }
        
        public function VerScriptSql()
        { 
            
        }
        
        public function VerScriptSqlApp()
        { 
            
        }
        
        public function VerInfoEstudiante()
        {
            $mi_pdf = 'Recursos/CARATULA.pdf';
            header('Content-type: application/pdf');
            header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
            readfile($mi_pdf);   
        }
    }
    
?>