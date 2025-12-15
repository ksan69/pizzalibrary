<?php 
declare(strict_types=1);

namespace PizzaProduct;

abstract class PizzaStore
{
    /**
     * Заказать пиццу
     *
     * @param string $type
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this ->createPizza($type);
        $pizza -> prepare();
        $pizza->cut();
        return $pizza;

    }
    abstract protected function createPizza(string $type): Pizza;
    
}
