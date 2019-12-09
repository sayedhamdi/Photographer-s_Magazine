<?php include "./includes/header.php" ?>

    <div class="container" style="padding : 50px 250px 0px">
        
    </div>
    <form action="login.php" method="POST" style="padding: 0px 250px 50px; text-align:center">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email"> E-mail : </label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password"> Password : </label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <br>
                    <input type="submit" name="login" class="form-control sign" Value="Login">
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>

<?php include "./includes/footer.php" ?>