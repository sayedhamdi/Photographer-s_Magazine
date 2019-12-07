<?php include "./includes/header.php" ?>

<div class="container" style="padding: 40px 144px;">
    <!-- action="includes/register.php" -->
    <div class="row">

        <div class="col-md-6" style="
            border-right: 1px solid #00000030;
            padding: 30px;">
            <div class="form-group">
                <label for="firstname"> First Name : </label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>

                <label for="lastname"> Last Name : </label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>

                <label for="email"> E-mail : </label>
                <input type="email" name="email" id="email" class="form-control" required>

                <label for="password"> Password : </label>
                <input type="password" name="password" class="form-control" required>

                <label for="password"> Confirm Password : </label>
                <input type="password" name="" class="form-control">
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
            <select class="selectpicker countrypicker form-control"></select>

            <label for="date"> Date of birth : </label>
            <input type="date" name="date" id="date" class="form-control" max="2019-06-25" required>

            <label for="level"> Skill - Level : </label>
            <select name="level" id="level" class="form-control" required>
                <option value=""></option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate </option>
                <option value="pro">Pro</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <br>
        <input type="button" name="register" onclick="validate()" class="form-control sign" Value="Register">
    </div>
    </form>
</div>

<script src="js/validation.js"></script>
<?php include "./includes/footer.php" ?>