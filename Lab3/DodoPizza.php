<?php 

namespace PizzaStore;

require_once 'PizzaStore.php';
require_once 'menu/MeatPizza.php';
require_once 'menu/FourCheeses.php';

use PizzaStore\PizzaStore;
use PizzaStore\MeatPizza;
use PizzaStore\FourCheeses;


class DodoPizza extends PizzaStore{
    public function orderPizza(string $type){
        $pizza = $this->createPizza($type);
    }

    protected function createPizza(string $type) : ?Pizza
    {
       if ($type != null){
        switch ($type) {
            case 'meat':
                return new MeatPizza;
            case 'four_cheeses':
                return new FourCheeses;
            }
        echo 'Товара не существует.';
        return null;
        }
    }
}