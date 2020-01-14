<?php include "./includes/header.php" ?>
    <link rel="stylesheet" href="css/styles/submission.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <div class="content">
        <h1 class="Nexa-Bold">Submission</h1>
        <?php
        if(isset($_SESSION["submitted"]) && $_SESSION["submitted"]==true)
        echo'
        <div class="alert alert-success Nexa-Bold" role="alert">
          Your have submitted successfully for this week !
        </div>';
     ?>
        <form action="./includes/submission.php" method="post" enctype="multipart/form-data">

             <br>
             <div class="choix">
               <label>Saisir votre categorie <span class="etoile">*</span></label>
               <select id="liste" class="Nexa-Light" name="categorie">
                 <option value="" selected hidden>--choisir une catégorie-- </option>
                 <option value="submission">Submission</option>
                 <option value="exclusive">Exclusive</option>
                 <option value="editorial">Editorial</option>
               </select>
               <span class="error_form" id="liste_error">

               </div><br>
               <div class="vos_image">
               <label> Choisir vos images <span class="etoile">*</span></label>
               <input type='file' name="upfile[]" />
                <input type='file' name="upfile[]" />
               <input id ="file3" type='file' name="upfile[]" />

               </div>
               <br><br><div class="envoyer">
                 <input type="submit" value="envoyer" class="env Nexa-Bold">
               </div>
        </form>
      </div>
  </body>
</html>
<!-- footer start -->
<?php include "./includes/footer.php" ?>
<script src="js/submission.js"></script>
