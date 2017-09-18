<?php
include('view_header.php');

// on inclue le fichier qui cotneitn la classe
// aisni on charge la classe ( on appelle la classe)

include('Book.php');

$book = new Book;

$id = $_GET['id'];
$title    = $_POST['title'] ;
$author = $_POST['author'] ;
$image = $_POST['image'] ;
$category = $_POST['category'] ;
$abstract = $_POST['abstract'] ;
$owner = $_POST['owner'] ;

$book_data = $book->update_book($id,$title, $author,$category,$image,$abstract,$owner);

     if(TRUE==$book_data)

     {
          echo '<p>'.'votre modification a bien été prise en compte'.'</p>';
     }
   else
   {
     echo '<p>'.'votre modification a échoué '.'</p>';
        }
      include('view_footer.php');
?>
