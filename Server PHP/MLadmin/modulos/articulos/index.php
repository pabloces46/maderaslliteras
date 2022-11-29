<?php
    session_start();
    if(!isset($_SESSION['usuario']['user']) || empty($_SESSION['usuario']['user'])) 
    header('refresh:0; url=../login');

    include ('../database/db.php');
    $mysqli = ConectarDB();

    //$sql = "SELECT * FROM articulos GROUP BY articulo";
    $sql = "SELECT * FROM articulos";
    $resultados = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('../../include/head.php'); ?>


</head>
    <body class="sb-nav-fixed">
        
        <?php include('../../include/nav.php'); ?>
        
        <div id="layoutSidenav">
        <?php include('../../include/menu.php'); ?>

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid pt-5">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Artículos
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Artículo</th>
                                                <th>Espesor</th>
                                                <th>Ancho</th>
                                                <th>Largo</th>
                                                <th>Diametro</th>
                                                <th>Litros</th>
                                                <th>Kilos</th>
                                                <th>Tipo</th>
                                                <th>Grano</th>
                                                <th>Diente</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Código</th>
                                                <th>Artículo</th>
                                                <th>Espesor</th>
                                                <th>Ancho</th>
                                                <th>Largo</th>
                                                <th>Diametro</th>
                                                <th>Litros</th>
                                                <th>Kilos</th>
                                                <th>Tipo</th>
                                                <th>Grano</th>
                                                <th>Diente</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            if($resultados->num_rows > 0 ){
	                                            while ($art_result = $resultados->fetch_assoc()){
                                                    echo "<tr>";
                                                    if($art_result['img'] != 'generic.jpg')
                                                    echo "<td style='background: green;'>".$art_result['codigo']."</td>";
                                                    else
                                                    echo "<td>".$art_result['codigo']."</td>";
                                                    echo "<td>".$art_result['articulo']."</td>";
                                                    echo "<td>".$art_result['espesor']."</td>";
                                                    echo "<td>".$art_result['ancho']."</td>";
                                                    echo "<td>".$art_result['largo']."</td>";
                                                    echo "<td>".$art_result['diametro']."</td>";
                                                    echo "<td>".$art_result['litros']."</td>";
                                                    echo "<td>".$art_result['kilos']."</td>";
                                                    echo "<td>".$art_result['tipo']."</td>";
                                                    echo "<td>".$art_result['grano']."</td>";
                                                    echo "<td>".$art_result['diente']."</td>";
                                                    echo "<td>"; ?> 
                                                    <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="<?php echo $art_result['codigo'] ?>" <?php if($art_result['activo'] == 'SI') echo "checked"; ?> onclick="validate(<?php echo $art_result['codigo'] ?>)">
                                                    <label class="custom-control-label" for="<?php echo $art_result['codigo'] ?>"></label>
                                                    <a href="editar.php?id=<?php echo $art_result['_id'] ?>" target="_blank"><i class="fas fa-edit"></i></a>     
                                                    <a href="detallearticulo.php?id=<?php echo $art_result['_id'] ?>" target="_blank"><i class="fas fa-info-circle"></i></a>     
                                                    
                                                    </div> 
                                                    
                                                    <?php 
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>
                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
                <div id="resultado"></div>

                

            </div>
        </div>
        
        <?php include('../../include/footerjs.php'); ?>

        <script type="text/javascript">
            function validate(id) {
                if (document.getElementById(id).checked) {
                    //alert(id+"checked");
                    var dataString = "activo=SI&codigo="+id;
                } else {
                    //alert(id+"not checked");
                    var dataString = "activo=NO&codigo="+id;
                }

                $.ajax({
                        type: "POST",
                        url: "acciones/change_activo.php",
                        data: dataString,
                        beforeSend: function () {
                            //$("#resultado").html("Procesando, espere por favor...");
                        },
                        success: function(response) {
                            alert("Cambiaste el estado 'activo' del artículo "+id);
                            //$("#resultado").html(response);
                            //$('.toast').toast('show');
                        }
                });
            }
        </script>

    </body>
</html>
