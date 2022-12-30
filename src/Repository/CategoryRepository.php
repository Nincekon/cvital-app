<?php

include_once "config/database.php";

class CategoryRepository //extends AnotherClass implements Interface
{
    public function getAll(): array
    {
        $connexion = db();
        $query = "SELECT * FROM category";
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $categories; 
    }
    
    public function getProducts($id): array
    {
        $connexion = db();
        $query = "SELECT * FROM product WHERE category=" . $id;
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $products = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $products; 
    }

    public function post($data) {
        $connexion = db();
        $query = "INSERT INTO category SET name=:name";

        $stmt = $connexion->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->execute();
    }
    
    public function delete($id) 
    {
        $connexion = db();
        $query = "DELETE FROM category WHERE id=" . $id;

        $stmt = $connexion->prepare($query);
        $stmt->execute();
    }
}
