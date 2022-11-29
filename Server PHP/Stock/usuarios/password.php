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

include ('../includes/db.php');

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
                            <label>CAMBIAR CONTRASEÑA</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form method="post" accept-charset="utf-8" id="formPass">
                                <div class="col-lg-3">
                                    <input type="hidden" name="user" value="<?php echo $_SESSION['usuario']['nombre']?>">
                                 </div><!-- /.row col-3 -->
                                 
                                  <div class="col-lg-6">
                                  <div class="table-responsive">
                                  	<table class="table">
                                        <tbody>
                                          <tr>
                                            <td>PIN Actual:</td>
                                            <td><input type="password" name="old" id="old" value="" class="form-control" required=""></td>
                                          </tr>

                                          <tr>
                                            <td>Nuevo PIN: <h6 style="color:red;">Solo pueden ser números</h6></td>
                                            <td>
                                                <input type="password" name="new" id="new" value="" class="form-control" onkeypress="return valideKey(event);"  required="" >
                                                
                                            </td>
                                          </tr>

                                          

                                         
                                        </tbody>
                                    </table><!-- /.table -->
                                  </div><!-- /.table-responsive -->
                                    
                                    
                                    <button type="button" class="btn btn-primary btn-lg btn-block" id="btn_cambiar">Cambiar</button>
                                  </div> <!-- /.row col-3 -->

                                <div class="col-lg-3">
                                </div> <!-- /.row col-3 -->
                                </form>
                            </div>
                            <!-- /.row -->
                            <br>
                            <div id="resultado"></div>
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

<script type="text/javascript">
$(document).ready(function() {

    $('#btn_cambiar').click(function(){

        var dataString = $('#formPass').serialize();

        $.ajax({
            type: "POST",
            url: "acciones/_cambiarpassword.php",
            data: dataString,
            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success: function(response) {
              $("#resultado").html(response);
            }
        });

    });
});

function valideKey(evt) {
var code = evt.which ? evt.which : evt.keyCode;
if (code == 8) {
    //backspace
    return true;
} else if (code >= 48 && code <= 57) {
    //is a number
    return true;
} else {
    return false;
}
}
</script>


</body>

<!-- InstanceEnd --></html>
