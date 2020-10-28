<div class="row">
    <div class="col-2">
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar"> 
                <div class="sidebar-header">
                    <h3>Sistema Inventario</h3>
                </div>
        
                <ul class="list-unstyled components">
                    <p>Base de datos 1</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="?controller=Operario&action=Vistas&vista=Inventario">Inventario</a>
                            </li>
                            <li>
                                <a href="?controller=Operario&action=Vistas&vista=EntradaSalida">Entradas/Salida</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#otrosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ver Archivos DB</a>
                        <ul class="collapse list-unstyled" id="otrosSubmenu">
                            <li>
                                <a href="?controller=VerDocumentos&action=VerER">Ver Diagrama ER</a>
                            </li>
                            <li>
                                <a href="?controller=VerDocumentos&action=VerScriptSql">Ver Script SQL</a>
                            </li>
                            <li>
                                <a href="?controller=VerDocumentos&action=VerScriptSqlApp">Ver Script SQL en Aplicacion</a>
                            </li>
                            <li>
                                <a href="?controller=VerDocumentos&action=VerInfoEstudiante">Ver Info Estudiante</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


<script type="text/javascript">
    $(document).ready(function () {
    
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    
    });
</script>
