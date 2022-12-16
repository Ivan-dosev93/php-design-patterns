<?php


namespace Composite;
require dirname(__DIR__).'/Composite/Component.php';

class Product extends Component
{
    public function getContent(): string
    {
        return " " . $this->getName();
    }

    public function getTotalPrice(): float
    {
        return $this->getPrice();
    }
}