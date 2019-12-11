<?php include "./includes/header.php" ?>
<?php include "./includes/login.php" ?>

<div class="container" style="margin: 6% auto;">
    <div class="login-header">
        <h1>Login</h1>
        <a href=register.php ><h6> You don't have an account ? Signup now</h6></a>
        <hr width=70%>
    </div>
    <form action="login.php" method="POST">
        <input placeholder="Email" type="email" name="email" class="form-control" id="email"
            style="width: 180px;margin: 30px auto;">
        <input placeholder="Password" type="password" name="password" class="form-control" id="password"
            style="width: 180px;margin: 30px auto;">

        <div class="form-group">
            <input type="submit" name="login" class="form-control login-btn sign" Value="Login">
            <a href=# style="color:gray;text-align:center;font-family:Nexa-Light"><h6 style="margin-top:10px">Password reset</h6></a>
        </div>
    </form>
</div>

<?php include "./includes/footer.php" ?>