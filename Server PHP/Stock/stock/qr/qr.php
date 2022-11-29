<?php    
    
    function delete_files($target) {
        /*if(is_dir($target)){
            $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned

            foreach( $files as $file ){
                delete_files( $file );      
            }
            rmdir( $target );
        } elseif(is_file($target)) {
            unlink( $target );  
        }*/
    }
    
    function generate_qr( $codigo ){
        //set it to writable location, a place for temp generated PNG files
        $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
        
        //html PNG location prefix
        $PNG_WEB_DIR = 'temp/';

        include "phpqrcode.php";    
        
        //ofcourse we need rights to create temp dir
        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);
        
        $filename = $PNG_TEMP_DIR.'qr.png';
        $errorCorrectionLevel = 'H'; 
        $matrixPointSize = 4;
        $ruta_img = "";

        if (isset($codigo) && !empty($codigo)) { 
        
            $filename = $PNG_TEMP_DIR.'qr'.md5($codigo.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
            QRcode::png($codigo, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 
            $ruta_img = $PNG_WEB_DIR.basename($filename);   
            echo $ruta_img;
            
        } else {    
            echo "Error al generar QR";
            //header("Location: inventario.php");
            //default data
            //echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
            //QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
            
        }    
    }

    