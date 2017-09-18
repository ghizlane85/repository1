<?php

$id=$_GET['id'];
?>
test
<form action="process_update_book.php?id=<?php echo $id;?>" method="POST">
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
<h1><b>je veux ce livre <b></h1>
	</div>

<p>
<label for="titre">
Titre
</label> :<br>
<input id="titre" name="title" type="text" value="<?php echo $title;?>"></p>

<p>
<label for="author">
Auteur </label> :<br>
<input id="author" name="author" type="text" value="<?php echo $author;?>"></p>

<label for="categorie"> Sélectionnez une categorie </label>
<p>	<select id="categorie" name="category">
<option value="0" ><?php echo $category;?></option>
<option value="1" >littérature</option>
<option value="2">Science</option>
<option value="3">Aventure</option>
<option value="4">Divers</option>

</select>

<p>
<label for="abstract">
Résumé </label> :<br>
<textarea id="abstract" cols ="25" rows="5" name="abstract" ><?php echo $abstract;?></textarea>
</p>
<p> Merci de renseigner un lien pour le télechargement d'une image </p>
<p><input id="image" name="image" type="text"   value="<?php echo $image;?>"></p>
<p>
<label for="owner">
Mon nom </label> :<br>
<input id="owner" name="owner" type="text"  value="<?php echo $owner;?>"></p>


<p>
<button class="btn btn-lg btn-primary"  type="submit" value="Je le depose">Mise à jour</button>
</p>

</form>


<?php


?>
