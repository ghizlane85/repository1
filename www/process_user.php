<?php
  // controller index.php

  // on inclue le fichier qui contient la classe
  // ainsi on charge la classe ( i.e. on appelle la classe)
  include('User.php');
  include('Book.php');


  if((isset($_POST['email'])) && (isset($_POST['password'])))

{    // la vérification du contenu posté par l'utilisateur est ici réduite à la simple vérification de l'existence des deux informations car on fait ensuite un simple SELECT qui vérifie l'existence ds informations dans la base.
    // instanciation de la classe : on crée l'objet $user pour accéder à la méthode verify_user()
 $user = new User;
    $email    = htmlspecialchars($_POST['email']); // on transforme les entités  html pour éviter les problèmes lors de la requete, par exemple des quotes dans la saisie
    $password = htmlspecialchars($_POST['password']); // on transforme les entités html pour éviter les problèmes lors de la requete, par exemple des quotes dans la saisie
    $user_verify = $user->verify_user($email, $password) ;

    //var_dump($user_verify);

    if(FALSE === $user_verify)
    {
      // $user->redirect();
      include('view_header.php');  //  template header html
      include('view_error_auth.php'); //  template erreur authentification
      include('view_footer.php');  //  template footer html
    }
    else
    {
      session_start();
      $name  = $user_verify['name'] ;
      $email = $user_verify['email'] ;
      $_SESSION['name']   = $name;
      $_SESSION['email'] = $email;

      $message = 'Bonjour '. $name . ', vous êtes connecté(e).';

     $book = new Book;
      $books = $book->get_books();
      include('view_header.php');  //  template header html
      include ('view_books.php'); // template admin
      include('view_footer.php');  //  template footer html
    }
}


elseif ((isset($_GET['do'])) && ($_GET['do']=='logout'))
{
  $user = new User;
  $user->logout();
}
else {
  include('view_header.php'); //  template header html
  include('view_form.php');   //  template de formulaire
  include('view_footer.php'); //  template footer html
}
?>
