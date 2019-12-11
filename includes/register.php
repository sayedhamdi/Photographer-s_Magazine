<?php 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

            $RegexAlphab = '/^[a-zA-Z]*$/';
            $RegexDate = '/^((19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))$/';
            $RegexEmail = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
            $RegexDigit = '/[0-9]/';
            $RegexChar = '/[a-zA-Z]/';
            
            if ( isset ($_POST ['register']) ){

                $fname = $_POST ['firstname'] ; 
                $lname = $_POST ['lastname'] ; 
                $email = $_POST ['email'] ; 
                $country = $_POST ['country'] ; 
                $date = $_POST ['date'] ; 
                $level = $_POST ['level'] ; 
                $password1 = $_POST ['password1'] ;
                $password2 = $_POST ['password2'] ;
                
                $valid = True;

                if ( !preg_match($RegexAlphab, $fname) || trim($fname)==""  || strlen($fname) >20 ){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Invalid First name</h6>";
                }
                
                if ( !preg_match($RegexAlphab, $lname) || trim($lname)==""  || strlen($lname) > 20 ){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Invalid Last name</h6>";
                }
                
                if (!preg_match($RegexDate, $date)){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Invalid Birth Date</h6>";
                }

                
                if (trim($email)=="" || !preg_match($RegexEmail, $email) || strlen($email) > 100){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Invalid Email</h6>";
                }
                    
                if ($password1 != $password2 || trim($password1)==""){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Password didn't match </h6>";
                }
                
                if(!preg_match($RegexDigit, $password1) || !preg_match($RegexChar,$password2)){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Password must contain numbers (0-9) and characters (a-z) ! </h6>";
                }

                
                if(strlen($password1) < 8){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Password must contain at least 8 characters </h6>";
                }
                $stmt =  $conn->prepare("SELECT email FROM photographe WHERE email LIKE ?") ; 
                $stmt->bind_param('s',$email);
                $stmt->execute();
                $stmt->store_result();
                $num = $stmt->num_rows; 

                if ( $num == 0 && $valid ) {
                    $stmt =  $conn->prepare("INSERT INTO photographe(firstname,lastname,email,country,date,level,password) VALUES (?,?,?,?,?,?,?)") ; 
                    // hash the password
                    $password1 = password_hash($password1,PASSWORD_DEFAULT);

                    $stmt->bind_param('sssssss',$fname,$lname,$email,$country,$date,$level,$password1);
                    
                    if (!$stmt->execute())
                        echo ('QUERY FAILED'.mysqli_error()) ;
                    else 
                        header("location: login.php");       
                } 
                else
                    echo "<h6 class='alert alert-danger text-center'>  Invalid Email </h6>" ; 
            }
?>
