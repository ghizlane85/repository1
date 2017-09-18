<?php
// on inclue le fichier qui cotneitn la classe
// aisni on charge la classe ( on appelle la classe)
include('connexion.php');
include('Book.php');

$book = new Book;
//getting id of the data from url
$id = $_GET['id'];
//apple la fonction delete_book pour supprimer les data de la table book
$book_data = $book->delete_book($id);
     if($book_data)
     {
       echo 'votre livre à été supprimer';
     }
   else
   {
     echo 'ko';
        }
        //redirecting to the display page (index.php in our case)
        //header("Location:index.php");





//echo '<li><a href="index.php?id=' . $id . '">' .  $post['name'] . '</a>' ;
?>
