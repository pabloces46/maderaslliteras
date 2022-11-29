<?php
session_start();


$results = [];
$ev["message"] = '';

if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
{
  // get details of the uploaded file
  $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
  $fileName = $_FILES['uploadedFile']['name'];
  $fileSize = $_FILES['uploadedFile']['size'];
  $fileType = $_FILES['uploadedFile']['type'];
  $fileNameCmps = explode(".", $fileName);
  $fileExtension = strtolower(end($fileNameCmps));

  // sanitize file-name
  $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
  //$newFileName = $fileName;

  // check if file has one of the following extensions
  //$allowedfileExtensions = array('jpg', 'gif', 'jpeg', 'png', 'zip', 'txt', 'xls', 'xlsx' , 'doc', 'docx', 'pdf');
  $allowedfileExtensions = array('jpg', 'gif', 'jpeg', 'png');
    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = '../../../server/server_img/showroom/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        

        include ('../../database/db.php');
        $mysqli = ConectarDB();
        $sql="INSERT INTO img_showroom (img) VALUES ('$newFileName')";
        if($mysqli->query($sql)){
          $ev["message"] ='ok';
          $ev["data"] = $newFileName;
        }
        else{
          $ev["message"] ='Error al guardar la foto en la DB';
        }
      }
      else 
      {
        $ev["message"] = 'Hubo un error al guardar el archivo en la carpeta seleccionada. Por favor verificar que la carpeta pueda ser escrita por el servidor.';
      }
    }
    else
    {
      $ev["message"] = 'Error al cargar. Solo se permiten los siguientes tipos de archivos: ' . implode(',', $allowedfileExtensions);
    }
}
else
{
  $ev["message"] = 'Hay un error la cargar del archivo. Por favor chequee el siguiente error.<br>';
  $ev["message"] .= 'Error:' . $_FILES['uploadedFile']['error'];
}

header('Content-Type: application/json');
echo json_encode($ev);

//$_SESSION['message'] = $message;
//header("Location: index.php");
?>