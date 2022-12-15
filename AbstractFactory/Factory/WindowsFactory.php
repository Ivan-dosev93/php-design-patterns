<?php


namespace AbstractFactory\Factory;


use AbstractFactory\GUI\ButtonInterface;
use AbstractFactory\GUI\InputInterface;
use AbstractFactory\GUI\Windows\WindowsButton;
use AbstractFactory\GUI\Windows\WindowsInput;

class WindowsFactory implements GUIFactory
{
    public function createButton(): ButtonInterface
    {
        return new WindowsButton();
    }

    public function createInput(): InputInterface
    {
        return new WindowsInput();
    }

    public function __construct()
    {
        echo "--------------windows------------- <br/>";
    }

    public function __destruct()
    {
        echo "-------------------------------------- <br/><br/><br/>";
    }
}