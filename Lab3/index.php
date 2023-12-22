<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'DodoPizza.php';
require_once 'DominosPizza.php';

use PizzaStore\DominosPizza;
use PizzaStore\DodoPizza;


$store1 = new DodoPizza();
$store2 = new DominosPizza();

print('Выбор пиццы...');

$store1->orderPizza("four_cheeses");
$store2->orderPizza("chorizo");