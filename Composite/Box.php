<?php


namespace Composite;


class Box extends Component
{
    use ChildrenTrait;

    public function getContent(): string
    {
        $string = " " . $this->getName();

        /**
         * @var Component $child
         */
        foreach ($this->children as $child) {
            $string .= $child->getContent();
        }

        return $string;
    }

    public function getTotalPrice(): float
    {
        $totalPrice = $this->getPrice();

        /**
         * @var Component $child
         */
        foreach ($this->children as $child) {
            $totalPrice += $child->getTotalPrice();
        }

        return $totalPrice;
    }
}