<?php


namespace Composite;


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