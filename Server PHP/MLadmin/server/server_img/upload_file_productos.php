<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: multipart/form-data; charset=UTF-8");
header('Content-Type: application/json');


$response = array();
$upload_dir = '/productos/';
$server_url = getcwd();
//$server_url = 'http://localhost:8000/MLServer/server_img/';
$errors = ''; // Store errors here


if($_FILES['file'])
{    

    $file_name = $_FILES["file"]["name"];
    $file_tmp_name = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES['file']['size'];
    $aux = array();
    $aux = explode(".",$file_name);
    $fileExtension = strtolower(end($aux));

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 


    $error = $_FILES["file"]["error"];

    if($error > 0){
        $response = array(
            "status" => "error",
            "error" => true,
            "message" => "Error al subir el archivo!"
        );
    }else 
    {   
        if (! in_array($fileExtension,$fileExtensionsAllowed)) {
            $errors = "Extensión no permitida. Debe ser JPG, JPEG or PNG";
          }
    
          if ($fileSize > 500000) {
            $errors = "La imagen exede peso maxímo permitido (0.5 MB)";
          }
    
          if (empty($errors)) {
            $date = date("dmY");
            $random_name = rand(1000000,10000000)."-".$date."-".$_POST['codigo'].".".$fileExtension;
            $uploadPath = $server_url . $upload_dir . basename($random_name); 
			
            if(move_uploaded_file($file_tmp_name , $uploadPath)) {

				$response = array(
					"status" => "success",
					"error" => false,
					"message" => "Archivo subido correctamente",
					"url" => $random_name
				);
                
            }else
            {
                $response = array(
                    "status" => "error",
                    "error" => true,
                    "message" => "Error al subir el archivo!"
                );
            }
        }
        else{
            $response = array(
                "status" => "error",
                "error" => true,
                "message" => $errors
            );


        }
    }

}else{
    $response = array(
        "status" => "error",
        "error" => true,
        "message" => "No file was sent!"
    );
}

echo json_encode($response);

?>