<?php

namespace PizzaStore;
require_once __DIR__ ."..\\..\\Pizza.php";
use PizzaStore\Pizza;

class MeatPizza extends Pizza{
    public function __construct(){
        $this->setName("Мясная пицца");
        $this->setSauce("Сырный соус");
        $this->setToppings(["Бекон", "Сыр моцарелла"]);
        parent::__construct();
    }

    public function prepare()
    {
        echo "Началась готовка пиццы ". $this->getName() ."\n";
        echo "Добавлен соус: ". $this->getSauce(). "\n";
        echo "Добавлены топпинги: " . implode('; ', $this->getToppings()) . "\n";
    }
}