<?php
// controller process.php

// on inclue le fichier qui contient la classe
// aisni on charge la classe ( on appelle la classe)
include('Book.php');

  // le contenu posté est à vérifier


  $title    = $_POST['title'] ;
  $author = $_POST['author'] ;
  $image = $_POST['image'] ;
  $category = $_POST['category'] ;
  $abstract = $_POST['abstract'] ;
  $owner = $_POST['owner'] ;

  // test de la valeur $title
/*  if (empty($_POST['title']))

  {
    echo 'vous devez saisir le titre.';
  }
  // test de la valeur $author

  if (empty($_POST['author']))

  {
    echo 'vous devez saisir le nom de l\'auteur.';
  }
  // test de la valeur $image
  if (empty($_POST['image']))

  {
    echo '<p>vous devez ajouter une image.</p>';
  }


/// nouvelle version
    if ($_POST['category']=='0')

    {
      echo '<p>vous devez choisir une catégorie.</p>';
    }*/
  $book = new Book; // création objet
  $book_data = $book->add_book( $title, $author, $category , $image , $abstract,$owner);
  if($book_data)
  {
    echo 'ok';
  }
else
{
  echo 'ko';
     }



  ?>
