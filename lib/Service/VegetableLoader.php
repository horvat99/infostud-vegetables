<?php

namespace Service;

use Model\Vegetable;

class VegetableLoader
{
    private $vegetableStorage;

    public function __construct(VegetableStorageInterface $vegetableStorage)
    {
        $this->vegetableStorage = $vegetableStorage;
    }

    public function getAllVegetable()
    {
        $vegetablesData = $this->vegetableStorage->fetchAllVegetablesData();
        $vegetables = [];
        foreach ($vegetablesData as $vegetableData)
        {
            $vegetables[] = $this->createVegetableFromData($vegetableData);
        }
        return $vegetables;
    }
    public function getOneVegetable($id)
    {
        $vegetablesData = $this->vegetableStorage->fetchSingleVegetableData($id);
        if ($vegetablesData != null) {
            $vegetables = [];
            $vegetables[] = $this->createVegetableFromData($vegetablesData);
            return $vegetables;
        } else {
            return false;
        }
    }
    public function getAllVegetableByName($name)
    {
        $vegetablesData = $this->vegetableStorage->fetchAllVegetablesDataByName($name);
        $vegetables = [];
        if ($vegetablesData != null) {
            $vegetables[] = $this->createVegetableFromData($vegetablesData);
            return $vegetables;
        } else {
            return false;
        }
    }

    public function createVegetableFromData(array $vegetableData)
    {
        $vegetable = new Vegetable($vegetableData['product_name'],$vegetableData['product_price'],$vegetableData['image']);
        return $vegetable;
    }

}