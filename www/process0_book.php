<?php

include('Book.php');

$book = new Book;

if(!isset($_GET['id']))
{
  include('view_header.php');  //  template header html
  // on a seulement la navigation
  // on utilise la méthode get_posts pour afficher tous les articles
  $books = $book->get_books();
  include ('view_books.php'); //  template de liste des liens
  include('view_footer.php');  //  template footer html
}
else
{
  include('view_header.php');  //  template header html
  // on remet la navigation
  $books = $book->get_books();
  include ('view_books.php');

  // on utilise la méthode get_book pour afficher les infos du livre dans la base
  // on assigne donc le  résultat de la méthode get_book avec comme argument la valeur du parametre dans l'URL
  // exemple : book.php?id=2
$book = new Book;

  $book_data = $book->get_book($_GET['id']) ;

  $title    = $book_data['title'] ;
  $author = $book_data['author'] ;
  $image = $book_data['image'] ;
  $category = $book_data['category'] ;
  $abstract = $book_data['abstract'] ;
  $owner = $book_data['owner'] ;
  include ('view_book.php'); //  template de detail d'un article
  include('view_footer.php');  //  template footer html

}
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

  $book = new Book;

    $book_data = $book->get_book($_GET['id']) ;

    $title    = $book_data['title'] ;
    $author = $book_data['author'] ;
    $image = $book_data['image'] ;
    $category = $book_data['category'] ;
    $abstract = $book_data['abstract'] ;
    $owner = $book_data['owner'] ;
    include ('view_book.php'); //  template de detail d'un article
    include('view_footer.php');  //  template footer html

?>
