<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->

<style type="text/css" media="print">
@media print {
#inventario {display:none;}
#movimientos {display:none;}
#vermovs {display:none;}
}
</style>

<?php
session_start();
if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=../index.php');

include ('../includes/db.php');

$permisos = $_SESSION['usuario']['permisos_mto'];

if( isset($_GET["movimientos"])){
	if( isset($_GET["codigo"]) && !empty($_GET["codigo"])){
		$codigo = $_GET['codigo'];
		$sql="SELECT * FROM listaequipos WHERE EQUIPO = '$codigo'";
		$mysqli = ConectarDB();
		$resultado = $mysqli->query($sql);
		$resultado->data_seek(0);
		$fila = $resultado->fetch_assoc();
		$descripcion = $fila['DESCRIPCION'];
		$sql="SELECT * FROM equipos WHERE EQUIPO = '$codigo'";
		$mysqli = ConectarDB();
		$resultado = $mysqli->query($sql);
		$mostrar = "movimientos";
	}
}

if( isset($_GET["listado"])){
        $sql="SELECT * FROM listaequipos";
        $mysqli = ConectarDB();
        $result= $mysqli->query($sql);
        $result->data_seek(0);
}

?>
<!-- InstanceEndEditable -->
</head>

<body>

    <div id="wrapper">

        <?php include('../includes/menustock.php');?>

        <div id="page-wrapper">
		<!-- InstanceBeginEditable name="Contenido" -->
              
            <!-- Termina cuadro de busqueda -->
            
              <div class="row" id="movimientos">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <label>Movimientos de Equipos</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="Equipos.php" method="get" accept-charset="utf-8">
                                <input type="hidden" name="movimientos">
                                 <div class="col-lg-12">
									<div class="form-group">
                                        <input type="text" class="form-control" placeholder="Codigo" name="codigo"> 
                                    </div>		
                                 </div><!-- /.row col-4 -->
                                 
                                <div class="col-lg-6">
                                	<button type="submit" class="btn btn-primary btn-lg btn-block">Ver movimientos</button>
                                </div>
                                <div class="col-lg-6">
                                    <a href="?listado"><button type="button" class="btn btn-primary btn-lg btn-block">Listado</button></a>
                                </div>
                                </form>
                            </div>
                            <!-- /.roww -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- / Termina el filtro de movimientos -->
            
            <!--  Table de informe -->
		<?php
        if (isset($resultado) && $mostrar=="movimientos"){
            $resultado->data_seek(0); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                                <div class="panel-heading" align="center">
                                    <?php echo "Resultados de la Busqueda de <b>". $codigo ."</b>"; ?>
                                    <br>
                                    <?php echo "<b>". $descripcion ."</b>";?>
                                    <div  align="right">
                                    <button type="button" class="btn btn-outline btn-primary btn-xs" onclick="javascript:window.print()" >Imprimir</button>
                                    </div>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Descripción</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php      
                                                    while ($fila = $resultado->fetch_assoc()) {
                                                            echo "<tr>";
                                                            echo "<td>" . $fila['FECHA'] . "</td>";
                                                            echo "<td>" . $fila['DESCRIPCION'] . "</td>";
                                                            echo "</tr>";	
                                                    }//While
                                                ?>
                                            </tbody>
                                        </table>
                                    </div><!-- /.table-responsive -->
                              </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            
            <div class="row">
                <div class="col-lg-9">
                </div>
                <div class="col-lg-3">
                <a href="nuevaentrada.php?codigo=<?php echo $codigo;?>"><button type="button" class="btn btn-primary btn-lg btn-block">Nuevo Movimiento</button></a>
                </div>    
            </div>
		<?php } ?>
	   
        <?php
        if (isset($_GET["listado"])){
            $result->data_seek(0); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                                <div class="panel-heading" align="center">
                                    <b>Lista de Equipos</b>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Equipo</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php      
                                                    while ($fila = $result->fetch_assoc()) {
                                                            echo "<tr>";
                                                            echo "<td>" . $fila['EQUIPO'] . "</td>";
                                                            echo "<td>" . $fila['DESCRIPCION'] . "</td>";
                                                            echo "<td><a href='?movimientos=&codigo=".$fila['EQUIPO']."'>ver movimientos</a></td>";
                                                            echo "</tr>";   
                                                    }//While
                                                ?>
                                            </tbody>
                                        </table>
                                    </div><!-- /.table-responsive -->
                              </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            
        <?php } ?>
            
		<!-- InstanceEndEditable -->
        
      	</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

</body>

<!-- InstanceEnd --></html>
