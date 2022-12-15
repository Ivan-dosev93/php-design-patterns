<?php


namespace AbstractFactory\GUI\Windows;


use AbstractFactory\GUI\ButtonInterface;

class WindowsButton implements ButtonInterface
{
    public function __construct()
    {
    }

    public function printButton(): void
    {
        echo "WindowsButton </br>";
    }

    public function clickButton(): void
    {
        echo "Button clicked call Windows logic. </br>";
    }
}