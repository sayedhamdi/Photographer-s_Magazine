<?php
if (session_status() == PHP_SESSION_NONE) session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

require_once "db_cnx.php";

$valid = true;

$email_err = $password_err= "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(trim($email)==""){
        $email_err =  "Please enter your email.";
        $valid = false;

    }

    if(trim($password)==""){
        $password_err = "Please enter your password.";
        $valid = false;
    }
    // Validate credentials
    if($valid){
        $stmt =  $conn->prepare("SELECT id, email, password FROM photographe WHERE email = ?") ;
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 0)
        {
          $email_err = "No account found with that email.";
          exit('no account found with email');
        }
        while($row = $result->fetch_assoc()) {
            if(password_verify($password, $row['password'])){
              @ob_start();
              session_start();
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = row['id'];
              $_SESSION["email"] = $email;
              header("location: index.php");
          }
            else $password_err = "The password you entered was not valid.";
        }
      }
}
?>
