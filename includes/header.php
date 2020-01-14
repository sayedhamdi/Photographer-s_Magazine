<?php
 if (session_status() == PHP_SESSION_NONE) {@ob_start();session_start();}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Pulchart Magazine</title>
  <link rel="stylesheet" href="css/styles/bootstrap.min.css" integrity="" crossorigin="anonymous">
  <link  rel="stylesheet" href="css/styles/style.css" integrity="">
  <?php
    if(isset($extra_css)) echo $extra_css;
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport"
    content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
</head>

<body>
  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <a class="navbar-brand Morva logo" href="../Photographer-s_Magazine">Pulchart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column " id="navbarSupportedContent">
      <div class="flex-row">
        <ul class="social-nav navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/pulchartmag/"> <img src="img/icons/facebook.png" alt="" width="25rem"> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://instagram.com/pulchart_magazine"> <img src="img/icons/insta.png" alt="" width="25rem"> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> <img src="img/icons/youtube.png" alt="" width="25rem"> </a>
          </li>
          <?php
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true )
            echo (
              '<li class="nav-item">
                <a class="nav-link" href="./profile.php"> <img src="img/icons/profile.png" alt="" width="25rem"> </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link Nexa-Bold" href="logout.php">logout</a>
              </li>');
            else
            echo (
              '<li class="nav-item">
                <a class="nav-link" href="login.php"> login </a>
              </li>

              <li class="nav-item" style="color:white;font-family:Nexa-Light;">/</li>
              <li class="nav-item active">
                <a class="nav-link Nexa-Bold" href="register.php">signup</a>
              </li>');
      ?>
        </ul>
      </div>
      <div class="flex-row">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../Photographer-s_Magazine">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Photography
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./exclusive.php">Exclusive</a>
              <a class="dropdown-item" href="./editorial.php">Editorial</a>
              <a class="dropdown-item" href="./bestof.php">Best of</a>
              <a class="dropdown-item" href="./archive.php">Archive</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./submission.php">Submission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./interview.php">Interview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Magazine</a>
          </li>

          <?php
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
              if ($_SESSION['email'] == "admin@root.com" && $_SESSION['id'] == 9  ){
                echo
                '<li class="nav-item">
                    <a class="nav-link " href="admin-manager-panel.php">Manager</a>
                  </li>';
              }
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <?php include "./includes/db_cnx.php" ?>
