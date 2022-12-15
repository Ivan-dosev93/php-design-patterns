<?php


namespace AbstractFactory\GUI\Ubuntu;


use AbstractFactory\GUI\ButtonInterface;

class UbuntuButton implements ButtonInterface
{
    public function __construct()
    {
    }

    public function printButton(): void
    {
        echo "UbuntuButton </br>";
    }

    public function clickButton(): void
    {
        echo "Button clicked called ubuntu logic. </br>";
    }
}