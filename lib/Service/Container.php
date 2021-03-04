<?php

namespace Service;

class Container
{

    private $configuration;
    private $pdo;
    private $vegetableCreator;
    private $vegetableUploader;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getPDO()
    {
        if ($this->pdo === null){
            $this->pdo = new \PDO(
                $this->configuration['db_dsn'],
                $this->configuration['db_user'],
                $this->configuration['db_pass'],
            );
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    public function getVegetableLoader()
    {
        if ($this->vegetableCreator === null){
            $this->vegetableCreator = new VegetableLoader(new PdoStorage($this->getPDO()));
        }

        return $this->vegetableCreator;
    }

    public function getVegetableUpload()
    {
        $this->vegetableUploader = new VegetableUpload($this->getPDO());

        return $this->vegetableUploader;
    }

}