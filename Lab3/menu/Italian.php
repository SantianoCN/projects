<?php

namespace PizzaStore;

require_once __DIR__ . "..\\..\\Pizza.php";
use PizzaStore\Pizza;

class Italian extends Pizza
{
    public function __construct()
    {
        $this->setName("Итальянская пицца");
        $this->setSauce("Соус песто");
        $this->setToppings(["Сладкий перец", "Сыр моцарелла"]);
        parent::__construct();
    }

    public function prepare()
    {
        echo "Началась готовка пиццы " . $this->getName() . "\n";
        echo "Добавлен соус: " . $this->getSauce() . "\n";
        echo "Добавлены топпинги: " . implode('; ', $this->getToppings()) . "\n";
    }
}