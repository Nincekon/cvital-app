<?php

include_once "config/database.php";

include_once "AbstractRepository.php";

class CursusReporitory extends AbstractRepository // implements Interface
{
    public function getAll(): array
    {
        $connexion = db();
        $query = "SELECT * FROM cursus";
        $stmt = $connexion->prepare($query);
        $stmt->execute();		
        
        $cursus = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $cursus; 
    }
}
