<?php 

namespace PizzaStore;

require_once 'PizzaStore.php';
require_once 'menu/Italian.php';
require_once 'menu/ChorizoPizza.php';

use PizzaStore\PizzaStore;
use PizzaStore\ChorizoPizza;
use PizzaStore\Italian;


class DominosPizza extends PizzaStore{
    public function orderPizza(string $type){
        $pizza = $this->createPizza($type);
    }

    protected function createPizza(string $type) : ?Pizza
    {
       if ($type != null){
        switch ($type) {
            case 'italian':
                return new Italian;
            case 'chorizo':
                return new ChorizoPizza;
            }
        echo 'Товара не существует.';
        return null;
        }
    }
}