<?php

namespace Service;

class PdoStorage implements VegetableStorageInterface
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAllVegetablesData()
    {

        $pdo = $this->pdo;
        $statement = $pdo->prepare('Select * from product');
        $statement->execute();
        $vegetablesArray = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $vegetablesArray;

    }

    public function fetchSingleVegetableData($id)
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare('Select * from product WHERE product_id=:id');
        $statement->execute(array('id' => $id));
        $vegetableArray = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$vegetableArray) {
            return null;
        }
        return $vegetableArray;
    }

    public function fetchAllVegetablesDataByName($name)
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare("Select * from product WHERE product_name LIKE ?");
        $statement->execute(array("%".$name.'%'));
        $vegetableArray = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$vegetableArray) {
            return null;
        }
        return $vegetableArray;
    }
}