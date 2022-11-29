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
if($permisos > 1){
	header('refresh:0; url=_repuestos.php');
}		

include ('../includes/db.php');

$mysqli = ConectarDB();
$resultados = $mysqli->query("SELECT TIPO FROM inventario GROUP BY TIPO ORDER BY TIPO ASC");
$resultados2 = $mysqli->query("SELECT DEPOSITO FROM inventario GROUP BY DEPOSITO ORDER BY DEPOSITO ASC");
$resultados3 = $mysqli->query("SELECT PROVEEDOR FROM inventario GROUP BY PROVEEDOR ORDER BY PROVEEDOR ASC");
$resultados4 = $mysqli->query("SELECT UNIDAD FROM inventario GROUP BY UNIDAD ORDER BY UNIDAD ASC");
$resultados5 = $mysqli->query("SELECT PRESENTACION FROM inventario GROUP BY PRESENTACION ORDER BY PRESENTACION ASC");

//$repuesto=$resultados->fetch_assoc();

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
                            <label>Nuevo Artículo</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="acciones/_nuevorepuesto.php" method="post" accept-charset="utf-8">
                                <input type="hidden" name="user" value="<?php echo $_SESSION['usuario']['nombre']?>">
                                <div class="col-lg-3">
                                 </div><!-- /.row col-3 -->
                                 
                                  <div class="col-lg-6">
                                  <div class="table-responsive">
                                  	<table class="table">
                                        <tbody>


                                          <tr>
                                            <td>Codigo:</td>
                                            <td>
                                            <input type="text" name="codigo" id="codigo" placeholder="Codigo" class="form-control" required="">
                                            <b><div id="resultado" style="color: red; padding-top: 10px;"></div></b>
                                            </td>
                                            
                                          </tr>
                                          <tr>
                                            <td>Tipo / Rubro:</td>
                                            <td>
                                              <input list="tipo" name="tipo" type="text" placeholder="Seleccione un tipo/rubro" class="form-control" required="">
                                            <datalist id="tipo">
                                              <?php
                                                while ($fila = $resultados->fetch_assoc()) {
                                                  echo "<option value='". $fila['TIPO'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>Articulo:</td>
                                            <td><input type="text" name="repuesto" value="" placeholder="Articulo" class="form-control" required=""></td>
                                          </tr>

                                          <tr>
                                            <td>Proveedor:</td>
                                            <td>
                                              <input list="proveedor" name="proveedor" type="text" placeholder="Seleccione un proveedor" class="form-control" required="">
                                            <datalist id="proveedor">
                                              <?php
                                                while ($fila = $resultados3->fetch_assoc()) {
                                                  echo "<option value='". $fila['PROVEEDOR'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Cód. Proveedor:</td>
                                            <td><input type="text" name="codprov" value="" placeholder="Código proveedor" class="form-control" required=""></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Descripcion:</td>
                                            <td><textarea name="descripcion" value="" placeholder="Descripcion del articulo" class="form-control"></textarea></td>
                                          </tr>
                                          
                                            <tr>
                                            <td>Comentarios:</td>
                                            <td><textarea name="uso" value="" placeholder="Comentarios" class="form-control"></textarea></td>
                                          </tr>
                                          
                                            <tr>
                                            <td>Cant. Actual:</td>
                                            <td><input type="number" min="0" name="stock" value="0" class="form-control"></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Cant. Minima:</td>
                                            <td><input type="number" min="0" name="cantmin" value="1" class="form-control"></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Presentación:</td>
                                            <td>
                                              <input list="presentacion" name="presentacion" type="text" placeholder="Presentación" class="form-control" required="">
                                            <datalist id="presentacion">
                                              <?php
                                                while ($fila = $resultados5->fetch_assoc()) {
                                                  echo "<option value='". $fila['PRESENTACION'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Unidad de medida:</td>
                                            <td>
                                              <input list="unidad" name="unidad" type="text" placeholder="Unidad de medida" class="form-control" required="">
                                            <datalist id="unidad">
                                              <?php
                                                while ($fila = $resultados4->fetch_assoc()) {
                                                  echo "<option value='". $fila['UNIDAD'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Depósito:</td>
                                            <td>
                                              <input list="deposito" name="deposito" type="text" placeholder="Seleccione un depósito" class="form-control" required="">
                                            <datalist id="deposito">
                                              <?php
                                                while ($fila = $resultados2->fetch_assoc()) {
                                                  echo "<option value='". $fila['DEPOSITO'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>
                                          
                                           <tr>
                                            <td>Ubicacion:</td>
                                            <td><input type="text" name="ubicacion" value="" placeholder="Ubicacion" class="form-control"></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>
                                              Imagen: 
                                              <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#ModalNewFoto"><i class="fa fa-plus"></i>
                                              </button>
                                            </td>
                                            <td><input type="text" name="imagen" id="imagen" value="default.jpg" class="form-control" readonly ></td>
                                          </tr>

                                         
                                        </tbody>
                                    </table><!-- /.table -->
                                  </div><!-- /.table-responsive -->
                                    
                                    
                                    <button type="submit" id="agregar" class="btn btn-primary btn-lg btn-block">Agregar Repuesto</button>
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
        <!-- Modal -->
          <div class="modal fade" id="ModalNewFoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myModalLabel">Nueva Imagen</h4>
                      </div>
                      <div class="modal-body">
                          <form method="POST" id="foto_form" enctype="multipart/form-data">
                             <input type="file" class="form-control" name="uploadedFile" />
                          </form>
                          <div style="color: red;" id="result"></div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary" id="Btn_guardar_foto">Guardar</button>
                      </div>
                  </div>
                  <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

<script type="text/javascript">
$(document).ready(function(){
                                                                                                                                                          
    $( "#Btn_guardar_foto" ).click(function() {

        var form = $('#foto_form');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }

        var formAction = form.attr('action');
        $.ajax({
            url         : 'acciones/_upload_foto.php',
            data        : formdata ? formdata : form.serialize(),
            cache       : false,
            contentType : false,
            processData : false,
            type        : 'POST',
            success     : function(data, textStatus, jqXHR){
              if(data.message == 'ok'){
                document.getElementById("imagen").value = data.data;
                $("#result").empty();
                $("#result").append("Archivo subido correctamente.");
              }
              else{
                $("#result").empty();
                $("#result").append(data.message);
              }
              
            }
        });
    });


$("#codigo").keyup(function(e){

var consulta = $("#codigo").val();                                        
                                             
  $.ajax({
        type: "POST",
        url: "acciones/_validarCodigo.php",
        data: "b="+consulta,
        dataType: "html",
        success: function(data){              
            if(data == "CODIGO EXISTENTE"){                                  
              $("#resultado").empty(); 
              $("#resultado").append(data);
              document.getElementById("agregar").disabled = true;
            }
            else{
              $("#resultado").empty();
              document.getElementById("agregar").disabled = false;
            }                                
        }
  });   

});

});



</script>
</body>

<!-- InstanceEnd --></html>
