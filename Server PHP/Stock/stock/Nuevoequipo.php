<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->

<?php
session_start();
if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=../index.php');

$permisos = $_SESSION['usuario']['permisos_mto'];
if ($permisos == 2)
	header('refresh:0; url=index.php');

?>

<!-- InstanceEndEditable -->
</head>

<body>

    <div id="wrapper">

        <?php include('../includes/menustock.php');?>

        <div id="page-wrapper">
		<!-- InstanceBeginEditable name="Contenido" -->
        
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <label>Dar de alta un nuevo Equipo</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="acciones/agregarequipo.php" method="post" accept-charset="utf-8">
                                <input type="hidden" name="user" value="<?php echo $_SESSION['usuario']['nombre']?>">
                                <div class="col-lg-3">
                                 </div><!-- /.row col-3 -->
                                 
                                  <div class="col-lg-6">
                                  <div class="table-responsive">
                                  	<table class="table">
                                        <tbody>
                                          <tr>
                                            <td>Codigo:</td>
                                            <td><input type="text" name="equipo" value="" placeholder="Codigo" class="form-control"></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Descripción:</td>
                                            <td><input type="text" name="descripcion" value="" placeholder="Descripción del Equipo" class="form-control"></td>
                                          </tr>
                                        
                                        </tbody>
                                    </table><!-- /.table -->
                                  </div><!-- /.table-responsive -->
                                    
                                    
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar Repuesto</button>
                                  </div> <!-- /.row col-3 -->

                                <div class="col-lg-3">
                                </div> <!-- /.row col-3 -->
                                </form>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
		
		<!-- InstanceEndEditable -->
        
      	</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

</body>

<!-- InstanceEnd --></html>
