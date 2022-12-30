<?php

include_once "config/database.php";

class ProductRepository extends AbstractRepository // implements Interface
{
    public function getAll(): array
    {
        $connexion = db();
        $query = "SELECT * FROM product";
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $products = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $products; 
    }

    public function getOne($id): array
    {
        $connexion = db();
        $query = "SELECT * FROM product WHERE id=" . $id;
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $product = $stmt->fetch(PDO::FETCH_OBJ);
        
        return $product;
    }

    public function post(array $data, mixed $files): bool
    {
        $connexion = db();
        $query = "INSERT INTO product SET name=:name, description=:description, price=:price, category=:category, filename=:filename";

        $stmt = $connexion->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":description", $data['description']);
        $stmt->bindParam(":price", $data['price']);
        $stmt->bindParam(":category", $data['category']);

        $filename = upload_file($files);
        $stmt->bindParam(":filename", $filename);
        
        return $stmt->execute();
    }
    
    public function delete($id): bool
    {
        $connexion = db();
        $query = "DELETE FROM product WHERE id=" . $id;

        $stmt = $connexion->prepare($query);
        return $stmt->execute();
    }
}
