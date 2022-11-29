<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

    <?php
        include_once ('qr.php');
        delete_files('temp/');

    include ('../../includes/db.php');


    if( isset($_GET["codigo"]) && !empty($_GET["codigo"])){
        $codigo = $_GET['codigo'];
        $mysqli = ConectarDB();

        $sql = "SELECT * FROM inventario WHERE CODIGO = '$codigo'";
        $resultados = $mysqli->query("SELECT * FROM inventario WHERE CODIGO = '$codigo'");
        $repuesto=$resultados->fetch_assoc();
    }


    ?>

    <link href="../../Estilos/Sub/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <STYLE TYPE="text/css">

        .contenedor{
            width:50%;
            float:left;
            border-style: solid;
            border-width: 1px;
            padding-bottom: 10px;
        }
        .codigo{
            width: 20%;
            float:left;
            padding-left: 10px;
            padding-top: 8px;
        }
        .texto{
            width: 75%;
            float:right;
            padding-left: 10px;
        }
        .art{
            padding-left: 10px;
        }
    </STYLE>

<head>
</head>

<body>


</div>
  
    <div class="contenedor">  
        <div class="art">
            <h5><?php echo strtoupper( $repuesto['REPUESTO'] ); ?></h5>
        </div>
        <div class="codigo">
            <img src=" <?php generate_qr($repuesto['CODIGO']); ?>" >
        </div>
        <div class="texto">
            <h2><?php echo $_GET['codigo']; ?></h2>
        </div>
        
    </div>


</body>
</html>