
<nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

       </button>
       <a class="navbar-brand" href="connexion.php">Déconnexion</a></li>
     </div>
     <div id="navbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
         <li><a href="MaBiblio.php">Ma bibliotroc</a></li>
         <li class="active"><a href="add_book.php">Deposer un livre</a></li>
       </ul>
     </div>
   </div>
 </nav>

<p> Bonjour. Vous etes connecte(e)</p>

   <div class="container">
    <h1> List de livres disponibles à l'échange </h1>
     </div>
<?php
foreach ( $books as  $id => $book)
{
  echo '<h3><a href="process0_book.php?id=' . $id . '">' .  $book['title'] . '</a></h3>' ;
  echo '<img alt="" width="150px" height="200px" src="'.$book['image'].'">';
  echo '<a href="controller_update.php?id='.$id.'">Modifier</a>'.'<br>';
  echo '<a href="delete_book.php?id='.$id.'">Supprimer ce livre</a>';
}


?>

</ul>
