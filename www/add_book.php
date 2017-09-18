<?php
include('view_header.php');

?>


<form action="process_book.php" method="POST">
<!--
email
password
-->

<!--
<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-8">
  -->
<h1><b>je depose mon livre <b></h1>
	</div>

    <form class="form-signin">
<p>
<label for="titre">
Titre
</label> :<br>
<input id="titre" name="title" type="text"></p>

<p>
<label for="author">
Auteur </label> :<br>
<input id="author" name="author" type="text"></p>

<label for="categorie"> Sélectionnez une categorie </label>
<p>	<select id="categorie" name="category">
<option value="0" >Votre choix</option>
<option value="1" >littérature</option>
<option value="2">Science</option>
<option value="2">Aventure</option>
<option value="4">Divers</option>

</select>

<p>
<label for="abstract">
Résumé </label> :<br>
<textarea id="abstract" cols ="25" rows="5" name="abstract"> </textarea>
</p>
<p> Merci de renseigner un lien pour le télechargement d'une image </p>
<input id="image" name="image" type="text"></p>
<p>
<label for="owner">
Mon nom </label> :<br>
<input id="owner" name="owner" type="text"></p>


<p>
<button class="btn btn-lg btn-primary"  type="submit" value="Je le depose">je le depose</button>
</p>

</form>


<?php
include('view_footer.php');

?>
