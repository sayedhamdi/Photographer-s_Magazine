<?php include "./includes/header.php" ?>

    <div class="container" style="padding : 50px 250px 0px">
        <?php 
            if ( isset ($_POST ['register']) ){

                $fname = $_POST ['firstname'] ; 
                $lname = $_POST ['lastname'] ; 
                $email = $_POST ['email'] ; 
                $country = $_POST ['country'] ; 
                $date = $_POST ['date'] ; 
                $level = $_POST ['level'] ; 
                $password = $_POST ['password'] ;

                $query = "SELECT email FROM photographe WHERE email LIKE '$email'" ; 
                $result = mysqli_query ($conn,$query) ;
                $num = mysqli_num_rows ($result) ; 

                if ( $num == 0 ) {
                    $query  = "INSERT INTO photographe(firstname,lastname,email,country,date,level,password) VALUES ('$fname','$lname','$email','$country','$date','$level','$password') ";
                    $result = mysqli_query ($conn,$query) ;
                    if (!$result)
                        die ('QUERY FAILED'.mysqli_error()) ;
                    else 
                        echo "<h6 class='alert alert-success text-center'> Sign Up Successfuly </h6>" ;        
                } 
                else
                    echo "<h6 class='alert alert-danger text-center'> Email Invalid </h6>" ; 
                }
        ?>
    </div>

    <form action="register.php" method="POST" style="padding: 0px 250px 50px; text-align:center">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">  First Name : </label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="lastname">  Last Name : </label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email"> E-mail : </label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="country">  Country : </label>
                    <select class="selectpicker countrypicker"></select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="date">  Date of birth : </label>
                    <input type="date" name="date" id="date" class="form-control" max="2019-06-25" required> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="level"> Skill - Level : </label>
                    <select name="level" id="level" class="form-control" required>
                        <option value=""></option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate </option>
                        <option value="pro">Pro</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password"> Password :  </label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password"> Confirm Password :  </label>
                    <input type="password" name="" class="form-control" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <br>
                    <input type="submit" name="register" class="form-control sign" Value="Register">
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>

<?php include "./includes/footer.php" ?>
