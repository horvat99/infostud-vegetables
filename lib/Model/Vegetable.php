<?php

namespace Model;

class Vegetable
{
    private $name;
    private $price;
    private $image;

    public function __construct($name,$price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }



}