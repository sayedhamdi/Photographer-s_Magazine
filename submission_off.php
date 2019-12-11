<!--header-->
<?php include "includes/header.php" ?>

<!Doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles/submission.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
      <div class="content">
        <h1>Participant</h1>
        <from action="#" method="" >

            <div class="peron">
              <div class="information_personel">
                 <label>Nom <span class="etoile">*</span></label>
                 <input type="text" class="nom" placeholder="entrer votre nom">
                 <span class="error_form" id="nom_error"></span><br>
              </div>

              <div class="information_personel">
                 <label>prenom <span class="etoile">*</span></label>
                 <input type="text" class="prenom" placeholder="entrer votre prenom">
                 <span class="error_form" id="prenom_error"><br>
              </div>
             </div>

             <br>
             <div class="email">
                <label> Email <span class="etoile">*</span></label>
                <input type="email" id="email" placeholder="entrer votre email">
                <span class="error_form" id="email_error"><br>
             </div>

             <br>
             <div class="choix">
               <label>Saisir votre categorie <span class="etoile">*</span></label>

               <select id="listee">
                 <option value="" selected hidden>--choisir une catégorie-- </option>
                 <option value="fashin">Fashin</option>
                 <option value="beauty">Beauty</option>
                 <option value="exclusive">Exclusive</option>
                 <option value="portfolio">Portfolio</option>

               </select>
               <span class="error_form" id="liste_error">

               </div><br>
               <div class="vos_image">
               <label> Choisir vos images <span class="etoile">*</span></label>
               <input type='file' name="file" multiple/>
               </div>


               <br><br><div class="envoyer">
                 <input type="submit" value="envoyer" class="env">
               </div>
        </form>
      </div>
  </body>
</html>
<!-- footer start -->
<?php include "./includes/footer.php" ?>
<script src="js/submission.js"></script>