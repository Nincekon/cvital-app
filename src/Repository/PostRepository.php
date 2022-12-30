<?php

include_once "config/database.php";

class PostRepository // extends AnotherClass implements Interface
{
    public function getAll(): array
    {
        $connexion = db();
        $query = "SELECT * FROM post";
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $posts = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $posts; 
    }
}
