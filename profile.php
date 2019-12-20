<?php include "./includes/header.php" ?>
<div class="container" style="padding: 30px 190px;">
    <form action="includes/profile.php" method="POST">
        <h1 class="Nexa-Bold" style='text-align :center;margin-bottom:30px'>Profile </h1>
        <div class="row">
        <?php 
            $email = $_SESSION ['email'] ; 
            $req = "SELECT * FROM photographe WHERE email LIKE '$email'" ;
            $res = mysqli_query ($conn,$req) ;  
            $row = mysqli_fetch_assoc ($res) ;
        ?>
            <div class="col-md-6" style="border-right: 1px solid #00000030;padding: 30px;">
                <div class="form-group">
                    <label for="firstname"> First Name : </label>
                    <input type="text" name="firstname" id="firstname" class="form-control" value="<?=$row['firstname'] ?>">

                    <label for="lastname"> Last Name : </label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="<?= $row['lastname'] ?>">

                    <label for="email"> E-mail : </label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $_SESSION ['email'] ?>">

                    <label for="password"> Password : </label>
                    <input type="password" id='password1' name="password1" class="form-control" >

                    <label for="password"> Confirm Password : </label>
                    <input type="password" id='password2' name="password2" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <br>
                <br>
                <br>
                <br>
                <h1 class="Nexa-Bold">Other Informations:</h1>+-
                <br>
                <br>
                <label for="country"> Country : </label>
                <input name="country" id="country" class="form-control" value="<?= $row['country'] ?>"/>

                <label for="date"> Date of birth : </label>
                <input type="date" name="date" id="date" class="form-control" max="2019-06-25" value="<?= $row['date'] ?>">

                <label for="level"> Skill - Level : </label>
                <input type="text" name="level" id="level" class="form-control"  value="<?= $row['level'] ?>" >
            </div>
            
        </div>
        <div class="form-group">
            <br>
            <input type="submit" name="update" onclick="return validate()" class="form-control sign" Value="Update">
            <br>
            <input type="submit" name="delete"  class="form-control sign" Value="Delete">

        </div>
    </form>
</div>

<script src="js/validation.js"></script>
<?php include "./includes/footer.php" ?>