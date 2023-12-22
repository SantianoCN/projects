<?php

namespace PizzaStore;
require_once __DIR__ ."..\\..\\Pizza.php";
use PizzaStore\Pizza;

class ChorizoPizza extends Pizza{
    public function __construct(){
        $this->setName("Чоризо пицца");
        $this->setSauce("Чесночный соус");
        $this->setToppings(["Перец халапеньо"]);
        parent::__construct();
    }

    public function prepare()
    {
        echo "Началась готовка пиццы ". $this->getName() ."\n";
        echo "Добавлен соус: ". $this->getSauce(). "\n";
        echo "Добавлены топпинги: " . implode('; ', $this->getToppings()) . "\n";
    }
}