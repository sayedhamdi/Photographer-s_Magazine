<?php
session_start(); 

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

        if($stmt){
            $stmt->bind_param('s',$email);

            if($stmt->execute()){
                $stmt->store_result();
                
                // if email exists verify password
                if($stmt->num_rows() == 1){                    
                    $stmt->bind_result('sss',$id, $email, $hashed_password);
                    if($row = $stmt->fetch()){
                        if(password_verify($password, $row['password'])){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            header("location: index.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $email_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
}
?>