<?php


namespace AbstractFactory\GUI\Mac;


use AbstractFactory\GUI\ButtonInterface;

class MacButton implements ButtonInterface
{
    public function __construct()
    {
    }

    public function printButton(): void
    {
        echo "MacButton </br>";
    }

    public function clickButton(): void
    {
        echo "Button clicked call Mac logic. </br>";
    }
}