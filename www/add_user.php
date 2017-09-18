

<?php
include('view_header.php');
include('User.php');
//include('User.php')
// usage de la classe
// instanciation de la classe : on crée l'objet $post
if((isset($_POST['email'])) && (isset($_POST['password'])))

{
$user = new User;
   $name    = htmlspecialchars($_POST['name']);
   $email    = htmlspecialchars($_POST['email']); // on transforme les entités  html pour éviter les problèmes lors de la requete, par exemple des quotes dans la saisie
   $password = htmlspecialchars($_POST['password']); // on transforme les entités html pour éviter les problèmes lors de la requete, par exemple des quotes dans la saisie

   $user_data = $user->add_user($name,$email, $password) ;

   echo '<p>'.'votre compte a bien été crée'.'</p>';
 }
 else

   {
     // $user->redirect();
   include('view_header.php');  //  template header html
   include('view_error_auth.php'); //  template erreur authentification
   include('view_footer.php');  //  template footer html

 }
 include('view_footer.php');
?>
