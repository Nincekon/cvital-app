<?php

include_once "config/database.php";

class UserRepository extends AbstractRepository // implements Interface
{
    public function getAll(bool $isAdmin = false): array 
    {
        $connexion = db();
        $query = "SELECT * FROM user WHERE admin=" . $isAdmin;
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $users; 
    }

    public function getByEmailAndPassword(array $data = []): bool
    {
        $connexion = db();
        $query = "SELECT * FROM user WHERE email='" . $data['email'] ."'";
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if (!empty($user) && ($user->password == md5($data['password']))) {
            return $user;
        } else {
            return null;
        }
    }

    public function post($data): bool
    {
        $connexion = db();
        $query = "INSERT INTO user SET email=:email, password=:password, admin=:admin";

        $stmt = $connexion->prepare($query);
        $email = $data['email'];
        $password = md5($data['password']);
        $admin = (isset($data['admin'])) ? 1 : 0;
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":admin", $admin);
        return $stmt->execute();
    }
    
    public function delete($id): bool
    {
        $connexion = db();
        $query = "DELETE FROM user WHERE id=" . $id;

        $stmt = $connexion->prepare($query);
        return $stmt->execute();
    }
}
