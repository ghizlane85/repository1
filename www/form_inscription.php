<?php
include('view_header.php');

?>

<form action="add_user.php" method="POST">

    <div class="container">
<div class : "row">
  <div class="col-md-6">
      <form class="form-signin">
        <h2 class="form-signin-heading"> S'inscrire gratuitement : </h2>
    <p>Inscrivez-vous en quelques clics sur <spam class="T1"> Readers Community </spam>et échangez dès aujourd'hui vos premiers livres, simplement et rapidement. Un service de qualité, des échanges à volonté </p>

        <label for="name" class="sr-only">Email</label>
        <input type="name" name="name" id="name"  placeholder="Nom" required autofocus>
        <p>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail"  placeholder="Adresse email" required autofocus>
        <p>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="password" id="inputPassword"  placeholder="Mot de passe" required>
        <div class="checkbox"></p>

        </div>
       <button class="btn btn-lg btn-primary" type="submit">Valider mon inscription</button>
      <!--     <h1 class="form-signin-heading">Pas encore membre? Inscrivez vous </h1>

          <button class="btn btn-lg btn-primary" type="submit">S'inscrire gratuitement</button> -->
      </form>


      <?php
      include('view_footer.php');

      ?>
