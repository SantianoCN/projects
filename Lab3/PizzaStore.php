<?php
namespace PizzaStore;
abstract class PizzaStore{
    abstract public function orderPizza(string $type);

    abstract protected function createPizza(string $type);
}