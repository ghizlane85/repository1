<?php

Class User // déclaration de la classe en fonction du nom de la table de la DB
{
    private $mysqli ; // cet attribut sert à stocker la connexion à la base de données
    /*
    le constructeur ici sert à créer la connexion à la base de données et
    à l'assigner à l'attribut $mysqli grace à la méta-variable "$this" utilisée comme suit : $this->mysqli

    Ainsi la connexion à la base de données est déclarée seulement une fois et est donc
    simplement et rapidement modifiable
    */
    public function __construct()
    {
        $this->mysqli = new mysqli('box', 'root', '', 'readersdb');
        $this->mysqli->query("SET NAMES 'utf8'");
    }

    /**
    * @return array
    */
    /**
    * verify_user
    *
    * verifie dans la table 'user' l'existence d'un enregistrement dont les colonnes email et password contiennent les valeurs passées en argument.
    *
    * @param none
    * @return array || FALSE
    */
    public function verify_user($email, $password) // déclaration de la méthode
    {
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
        $result = $this->mysqli->query('SELECT id, name, email  FROM user WHERE email ="'. $email .'" && password="'. $password .'"');
        // echo 'SELECT id, name, email  FROM user WHERE email ="'. $email .'" && password="'. $password .'"';

        $row = $result->fetch_array();
        //var_dump($row);
        if(is_null($row))
        {
          return FALSE;
        }
        else
        {
        $data['name']   = $row['name'];
        $data['email']  = $row['email'];
        // var_dump($data);
        return $data ;
      }
    }

    /**
    * @return array
    */
    /**
    * add_user
    *
    * ajouter  dans la table 'user  les colonnes name, email et password contiennent les valeurs passées en argument.
    *
    * @param none
    * @return array || FALSE
    */
    public function add_user($name,$email, $password) // déclaration de la méthode
    {
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
        // création de la requete MySQL
        $sql = 'INSERT INTO user (name ,email, password) VALUES ("'.$name.'","'.$email.'","' .$password .'");';

        $result = $this->mysqli->query($sql);

        if(FALSE == $result)
        {
            return FALSE ;
        }
        else
        {
            return TRUE ;
        }
    }


    /**
    * redirect
    *
    * redirection header location en fonction de la valeur $url
    *
    * @param string $id
    * @return array or false
    */
    public function redirect($url)
    {
        header('Location:' . $url);
    }

    /**
    * logout
    *
    * vide puis supprime les variables de sessions
    *
    * @param string $id
    * @return array or false
    */
    public function logout()
    {
      session_start();
      session_unset();
      session_destroy();
      $this->redirect('./');
    }

} // fin de la création de la classe
