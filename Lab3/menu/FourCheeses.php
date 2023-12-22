<?php

namespace PizzaStore;
require_once __DIR__ ."..\\..\\Pizza.php";
use PizzaStore\Pizza;

class FourCheeses extends Pizza{
    public function __construct(){
        $this->setName("Четыре сыра");
        $this->setSauce("Соус барбекю");
        $this->setToppings(["Индейка", "Пармезан", "Перец халапеньо"]);
        parent::__construct();
    }

    public function prepare()
    {
        echo "Началась готовка пиццы ". $this->getName() ."\n";
        echo "Добавлен соус: ". $this->getSauce(). "\n";
        echo "Добавлены топпинги: " . implode('; ', $this->getToppings()) . "\n";
    }
}