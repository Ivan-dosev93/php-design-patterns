<?php


namespace AbstractFactory\Factory;


use AbstractFactory\GUI\ButtonInterface;
use AbstractFactory\GUI\InputInterface;
use AbstractFactory\GUI\Ubuntu\UbuntuButton;
use AbstractFactory\GUI\Ubuntu\UbuntuInput;

class UbuntuFactory implements GUIFactory
{
    public function createButton(): ButtonInterface
    {
        return new UbuntuButton();
    }

    public function createInput(): InputInterface
    {
        return new UbuntuInput();
    }

    public function __construct()
    {
        echo "-------------window u------------- <br/>";
    }

    public function __destruct()
    {
        echo "-------------------------------------- <br/><br/><br/>";
    }
}