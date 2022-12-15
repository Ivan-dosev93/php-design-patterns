<?php


namespace AbstractFactory\Factory;


use AbstractFactory\GUI\ButtonInterface;
use AbstractFactory\GUI\InputInterface;
use AbstractFactory\GUI\Mac\MacButton;
use AbstractFactory\GUI\Mac\MacInput;

class MacFactory implements GUIFactory
{
    public function createButton(): ButtonInterface
    {
        return new MacButton();
    }

    public function createInput(): InputInterface
    {
        return new MacInput();
    }

    public function __construct()
    {
        echo "-------------window mac---------- <br/>";
    }

    public function __destruct()
    {
        echo "-------------------------------------- <br/><br/><br/>";
    }
}