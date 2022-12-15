<?php


namespace AbstractFactory\GUI\Windows;


use AbstractFactory\GUI\InputInterface;

class WindowsInput implements InputInterface
{
    public function __construct()
    {
    }

    public function printInput(): void
    {
        echo "WindowsInput </br>";
    }

    public function enterText(): void
    {
        echo "Text entered call Windows logic. </br>";
    }
}