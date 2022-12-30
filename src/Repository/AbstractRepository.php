<?php

include_once "config/database.php";

class AbstractRepository // extends AnotherClass implements Interface
{
    public function uploadFile($file): string
    {
        $uploadDir = __DIR__ . '/uploads/';
        $uploadFilename = $uploadDir . basename($file['file']['name']);
        
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilename);

        return basename($file['file']['name']);
    }
}
