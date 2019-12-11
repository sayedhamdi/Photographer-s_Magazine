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
        $result = $stmt->store_result();
        if($stmt->num_rows() == 1){ 
            if($row = $result->fetch_assoc()){
                if(password_verify($password, $row['password'])){
                    session_start();
            
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["email"] = $email;                            
                    
                    header("location: index.php");
                }
                else $password_err = "The password you entered was not valid.";

            }
            else $email_err = "No account found with that email.";
        }
    }
}
?>