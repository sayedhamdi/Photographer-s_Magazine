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