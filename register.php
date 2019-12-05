<?php include "./includes/header.php" ?>


    <form action="" method="POST" style="padding: 70px 250px ; text-align:center">
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
