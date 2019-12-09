<?php include "./includes/header.php" ?>
<div class="container" style="padding: 30px 190px;">

<?php 
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

                if ( !preg_match($RegexAlphab, $fname) || strlen($fname) == 0  || strlen($fname) >20 ){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Invalid First name</h6>";
                }
                
                if ( !preg_match($RegexAlphab, $lname) || strlen($lname) == 0  || strlen($lname) > 20 ){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Invalid Last name</h6>";
                }
                
                if (!preg_match($RegexDate, $date)){
                    $valid = False;
                    echo $date;
                    echo "<h6 class='alert alert-danger text-center'> Invalid Birth Date</h6>";
                }

                
                if (strlen($email) == 0 || !preg_match($RegexEmail, $email) || strlen($email) > 100){
                    $valid = False;
                    echo "<h6 class='alert alert-danger text-center'> Invalid Email</h6>";
                }
                    
                if ($password1 != $password2 || strlen($password2) == 0){
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
                    $stmt->bind_param('sssssss',$fanme,$lname,$email,$country,$date,$level,$password1);
                   
                    if (! $stmt->execute())
                        die ('QUERY FAILED'.mysqli_error()) ;
                    else 
                        echo "<h6 class='alert alert-success text-center'> Sign Up Successfuly </h6>" ;        
                } 
                else
                    echo "<h6 class='alert alert-danger text-center'>  Invalid Email </h6>" ; 
            }
?>
    <form action="register.php" method="POST">
        <div class="row">
            <div class="col-md-6" style="border-right: 1px solid #00000030;padding: 30px;">
                <div class="form-group">
                    <label for="firstname"> First Name : </label>
                    <input type="text" name="firstname" id="firstname" class="form-control">

                    <label for="lastname"> Last Name : </label>
                    <input type="text" name="lastname" id="lastname" class="form-control">

                    <label for="email"> E-mail : </label>
                    <input type="email" name="email" id="email" class="form-control">

                    <label for="password"> Password : </label>
                    <input type="password" id='password1' name="password1" class="form-control">

                    <label for="password"> Confirm Password : </label>
                    <input type="password" id='password2' name="password2" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <br>
                <br>
                <br>
                <br>
                <h1 class="Nexa-Bold">Other Informations:</h1>
                <br>
                <br>
                <label for="country"> Country : </label>
                <input name="country" id="country" class="form-control" />

                <label for="date"> Date of birth : </label>
                <input type="date" name="date" id="date" class="form-control" max="2019-06-25">

                <label for="level"> Skill - Level : </label>
                <select name="level" id="level" class="form-control" required>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate </option>
                    <option value="pro">Pro</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <br>
            <input type="submit" name="register" onclick="return validate()" class="form-control sign" Value="Register">
        </div>
    </form>
</div>

<script src="js/validation.js"></script>
<?php include "./includes/footer.php" ?>