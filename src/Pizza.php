<?php
declare(strict_types=1);

namespace PizzaLibrary;

class Pizza
{
    protected string $name;
    protected string $sauce;
    protected array $toppings = [];

    /*
    * Приготовить пиццу
    * @return void
    */
    public function prepare(): void
    {
        echo "Началась готовка пиццы{$this->name}\n";
        echo "Добавлен соус {$this->sauce} \n";
        echo "Добавлены топики: " . implode(', ', $this->toppings) . "\n";
    }
    /*
    * Разделить пиццу
    * @return void
    */
    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }

    /*
    * Получить название пиццы
    * @return string
    */
    public function getName(): string
    {
        return $this -> name;
    }
    
}


