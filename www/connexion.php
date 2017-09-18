<?php
include('view_header.php');

?>
<!--
email
password
-->
<form action="process_user.php" method="POST">

  <div class="container">
<div class : "row">
  <div class="col-md-6">
        <h2 class="form-signin-heading">Identifiez-vous : </h2>
        <label for="inputEmail" class="sr-only">adresse email </label>
        <input type="email" name="email" id="inputEmail"  placeholder="Adresse email" required autofocus>
        <p>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="inputPassword"  placeholder="Mot de passe" required>
        <div class="checkbox"></p>

        </div>
       <button class="btn btn-lg btn-primary" type="submit">Valider</button>
      <!--     <h1 class="form-signin-heading">Pas encore membre? Inscrivez vous </h1>

          <button class="btn btn-lg btn-primary" type="submit">S'inscrire gratuitement</button> -->
      </form>

  </div>

  <div class="col-md-6">
    <br>
 <img src="http://www.booktroc.com/images/dec/anim_jai04.gif">

</div>
  </div>
    <!-- droite -->
 <div class="jumbotron">
    <div class="row">
       <div class="col-lg-4">
         <h2>Echangez vos livres contre des nouveaux !</h2>
         <p class="text-danger">Readers Community vous permet de lire de nouveaux titres toute l'année. Inscrivez-vous gratuitement et ajoutez vos livres à notre catalogue.</p>
         <p>Le bon plan pour lire moins cher toute l'année ! </p>

       </div>
       <div class="col-lg-4">

         <h2>Le troc de livres, mode d'emploi</h2>
                  <p>J'indique les livres que je possède. Lorsqu'un membre souhaite un de mes livres, je le lui expédie et je gagne les Points correspondant à la valeur du livre. Avec mes Points je commande les livres que je désire.  </p>

               </div>
                <div class="col-lg-4">
                  <h2>Pas encore membre?</h2>
                  <p>Inscrivez vous et échangez vos livres contre des nouveaux avec Readers Community</p>
                  <p><a class="btn btn-primary" href="form_inscription.php" role="button">S'inscrire gratuitement &raquo;</a></p>
                </div>
              </div>
 </div>
exemple

   email = ghizlane@exemple.com
   password = ghizlane

<?php
include('view_footer.php');

?>
