<?php

Class Book // déclaration de la classe en fonction du nom de la table de la DB
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
        $this->mysqli = new mysqli('localhost', 'root', '', 'readersdb');
        $this->mysqli->query("SET NAMES 'utf8'");
    }

    /**
    * @return array
    */
    /**
    * get_books
    *
    * return books list  from database readersdb.book
    *
    * @param none
    * @return array
    */
    public function get_books() // déclaration de la méthode
    {
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli
        $result = $this->mysqli->query('SELECT id, title, image FROM book');
        while($row = $result->fetch_array())
        {
          $data[$row['id']]['title']   = $row['title'];
          $data[$row['id']]['image']   = $row['image'];
        }
        return $data ;
    }

    /**
    * get_book
    *
    * return book details from database readersdb.book
    *
    * @param string $id
    * @return array or false
    */
    public function get_book($id)
    {
        // création de la requete MySQL
        $sql = 'SELECT  id, title ,author, category, image, abstract,owner FROM book WHERE id = ' . $id ;
        // echo $sql ;
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli$result = $this->mysqli->query($sql);
        $result = $this->mysqli->query($sql);
        // var_dump($result);

        if(TRUE == $result)
        {
            $row = $result->fetch_array();
            $data['id']    = $row['id'];
            $data['title']  = $row['title'];
            $data['author']  = $row['author'];
            $data['image']  = $row['image'];
            $data['category']  = $row['category'];
            $data['abstract']  = $row['abstract'];
            $data['owner']  = $row['owner'];
            return $data ;
        }
        else
        {
            return FALSE ;
        }
    }

    /**
    * add_book into database readersdb.book
    *
    *
    *
    * @param les valeurs poster
    * @return id cré ou false
    */


    public function add_book($title, $author,$category,$image,$abstract,$owner)

    {
        // création de la requete MySQL
        $sql = 'INSERT INTO book (title, author, category, image, abstract,  owner)
        VALUES ("'.$title.'","'.$author.'","'.$category.'","'.$image.'","'.$abstract.'","'. $owner.'");';
        //echo $sql;


        // echo $sql ;
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli$result = $this->mysqli->query($sql);
        $result = $this->mysqli->query($sql);
      //  var_dump($result);
//à vérifier si c'est FALSE ou NULL
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
    * uptade_book  database readersdb.book
    *
    *
    *
    * @param $id
    * @return id cré ou false
    */
    public function update_book($id,$title, $author,$category,$image,$abstract,$owner)

    {

        $sql = ('UPDATE book SET title="'.$title.'" ,author="'.$author.'" ,category="'.$category.'" ,image="'.$image.'" , abstract="'.$abstract.'" ,owner="'.$owner.'" WHERE id ='.$id);
        //echo $sql;


        // echo $sql ;
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli$result = $this->mysqli->query($sql);
        $result = $this->mysqli->query($sql);
      //  var_dump($result);
    //à vérifier si c'est FALSE ou NULL
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
    * uptade_book  database readersdb.book
    *
    *
    *
    * @param $id
    * @return id cré ou false
    */
    public function delete_book($id)

    {
        // supprimer un livre de la base de donnes requete MySQL DELETE
        $sql = ('DELETE FROM book WHERE id='.$id);
        echo $sql;


        // echo $sql ;
        // on utilise l'atribut $mysqli pour récupérer la connexion à la base de données
        // au moyen de la méta-variable "$this" utilisée comme suit : $this->mysqli$result = $this->mysqli->query($sql);
        $result = $this->mysqli->query($sql);
        var_dump($result);
    //à vérifier si c'est FALSE ou NULL
        if(FALSE == $result)
        {
            return FALSE ;
        }
        else
        {
            return TRUE ;
        }
    }


} // fin de la création de la classe

?>
