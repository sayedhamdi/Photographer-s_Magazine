<?php
require_once "./db_cnx.php";
 if (session_status() == PHP_SESSION_NONE) {@ob_start();session_start();}
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  $user_id = $_SESSION["id"];
}else{
  header("location:../login.php");
}
if(isset($_SESSION["submitted"]) && $_SESSION["submitted"]==true){
  header("location:index.php");
}
if (isset($_POST["categorie"]) ){
  // Check $_FILES['upfile']['error'] value.
  $number_of_images = 0;
  $categorie = $_POST["categorie"];
  $uploads_dir = '../uploads';
  foreach ($_FILES["upfile"]["error"] as $key => $error) {

    switch ($error) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
        {
          if($number_of_images<=0)
          throw new RuntimeException('No file sent.');
        }
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
        {
          if($number_of_images<=0)
          throw new RuntimeException('Exceeded filesize limit.');
        }
        default:
         if($number_of_images<=0)
            throw new RuntimeException('Unknown errors.');
    }

      if ($error == UPLOAD_ERR_OK) {
          $tmp_name = $_FILES["upfile"]["tmp_name"][$key];
          $name = $_FILES["upfile"]["name"][$key];
          move_uploaded_file($tmp_name, "$uploads_dir/submission$user_id$name");
          $number_of_images++;
          $stmt = $conn->prepare("INSERT INTO image (`name`, `category`, `verified`, `owner`)VALUES (?, ?, ?, ?)");
          $stmt->bind_param('ssdd', $nom, $cat, $verif, $owner);
          $nom = "uploads/submission$user_id$name";
          $cat=$categorie;
          $verif=0;
          $owner=$user_id;
          if (!$stmt->execute())
              echo ('QUERY FAILED'.mysqli_error()) ;
      }
      $_SESSION["submitted"]=true;
      header("location:../submission_off.php");

  }

}
?>
