<?php

namespace PizzaStore;

abstract class Pizza{
    protected string $name = '';
    protected string $sauce = '';
    protected array $toppings = [];

    public function __construct(){
        $this->prepare();
        $this->cut();
    }

    abstract public function prepare();

    public function cut(){
        echo 'Данную пиццу нарезают по диагонали' . "\n";
    }

    public function getName() : string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getSauce() : string
    {
        return $this->sauce;
    }
    public function setSauce(string $sauce)
    {
        $this->sauce = $sauce;
    }

    public function getToppings() : array
    {
        return $this->toppings;
    }
    public function setToppings(array $toppings)
    {
        $this->toppings = $toppings;
    }
}