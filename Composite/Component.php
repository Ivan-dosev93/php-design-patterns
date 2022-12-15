<?php


namespace Composite;

use Exception;

abstract class Component
{
    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Component
     */
    protected $parent;

    abstract public function getContent(): string;

    abstract public function getTotalPrice(): float;

    /**
     * @return Component
     */
    public function getParent(): Component
    {
        return $this->parent;
    }

    /**
     * @param Component $parent
     * @return Component
     */
    public function setParent(Component $parent): Component
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Component
     */
    public function setName(string $name): Component
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Component
     */
    public function setPrice(float $price): Component
    {
        if ($price < 0) {
            throw new Exception('Цената не може да е отрицателна');
        }

        $this->price = $price;
        return $this;
    }


}