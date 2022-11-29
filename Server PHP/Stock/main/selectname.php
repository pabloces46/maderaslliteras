<?php
session_start();

if($_SESSION['usuario']['permisos_mto'] == 1){
	if(isset($_GET['N']))
	{
		$_SESSION['usuario']['name'] = $_GET['N'];
		header('refresh:0; url=index.php');
	}
}
else
{
	header('refresh:0; url=index.php');
}
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>
</head>

<body>

	<div id="wrapper">
		 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-heading" align="center">
                            <label>Seleccione un usuario</label>

                            <div class="panel-body">
	                            <div class="row">
		                            <div class="col-lg-3"></div>
		                            <div class="col-lg-3">
		                            	<a href="?N=Diego Mira"><button type="button" class="btn btn-primary btn-lg btn-block">Diego Mira</button></a>
		                            	<br>
		                            	<a href="?N=Leo Sanchez"><button type="button" class="btn btn-primary btn-lg btn-block">Leo Sanchez</button></a>
		                            	<br>
		                            	<a href="?N=Mario Leiva"><button type="button" class="btn btn-primary btn-lg btn-block">Mario Leiva</button></a>
		                            	<br>
		                            </div>
		                            <div class="col-lg-3">
		                            	<a href="?N=Jorge Sanchez"><button type="button" class="btn btn-primary btn-lg btn-block">Jorge Sanchez</button></a>
		                            	<br>
		                            	<a href="?N=Mario Borgiatino"><button type="button" class="btn btn-primary btn-lg btn-block">Mario Borgiattino</button></a>
		                            	<br>
		                            	<a href="?N=Seba Castro"><button type="button" class="btn btn-primary btn-lg btn-block">Seba Castro</button></a>
		                            	<br>
		                            </div>
		                            <div class="col-lg-3"></div>
	                           </div>
                       	   </div>

                            
                        </div>
                    </div>
                </div>
            </div>
	</div>
	
    <?php include('../includes/footer.php');?>

</body>

<!-- InstanceEnd --></html>
