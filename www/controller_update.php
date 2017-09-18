<?php

include('Book.php');
//include('User.php')
// usage de la classe
// instanciation de la classe : on crée l'objet $post


$book = new Book;

  $book_data = $book->get_book($_GET['id']) ;

  $id = $_GET['id'];
  $title    = $book_data['title'] ;
  $author = $book_data['author'] ;
  $image = $book_data['image'] ;
  $category = $book_data['category'] ;
  $abstract = $book_data['abstract'] ;
  $owner = $book_data['owner'] ;
include('view_header.php');
  include ('update_book.php'); //  template de detail d'un
  include('view_footer.php');

//$book_data = $book->update_book($id,$title, $author,$category,$image,$abstract,$owner) ;


// on utilise la méthode add_book pour ajouter des livre dans la base
// on assigne donc le  résultat de la méthode get_book avec comme argument la valeur du parametre dans l'URL
// exemple : book.php?id=2


/*include('process_book.php');

  $title    = $_POST['title'] ;
  $author = $_POST['author'] ;
  $image = $_POST['image'] ;
  $category = $_POST['category'] ;
  $abstract = $_POST['abstract'] ;
  $comments = $_POST['comments'] ;
  $owner = $_POST['owner'] ;

  $book = new Book;
  $book_data = $book->add_book($title, $author,$category,$image,$abstract,$comments,$owner);*/


?>
