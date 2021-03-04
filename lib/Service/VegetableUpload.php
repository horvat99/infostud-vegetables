<?php

namespace Service;

class VegetableUpload
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insert($name,$price,$image)
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare('INSERT INTO product (product_name,product_price,image) VALUES 
                                    (:name,:price,:image)');
        $statement->execute(array('name' => $name,'price'=>$price,'image'=>$image['name']));

        $target = "pictures/".basename($image['name']);
        if (move_uploaded_file($image['tmp_name'], $target)) {
            echo "Succes";
        } else {
            echo "Failed";
        }
    }



}