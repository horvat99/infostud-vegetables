<?php

namespace Service;

interface VegetableStorageInterface
{
    public function fetchAllVegetablesData();

    public function fetchSingleVegetableData($id);

    public function fetchAllVegetablesDataByName($name);
}