<?php


namespace FactoryMethod;


use AbstractFactory\Factory\GUIFactory;
use Exception;

class GUIManager
{
    const MAC_GUI = "AbstractFactory\Factory\MacFactory";
    const WINDOWS_GUI = "AbstractFactory\Factory\WindowsFactory";
    const UBUNTU_GUI = "AbstractFactory\Factory\UbuntuFactory";

    public function __construct()
    {
    }

    public function createGUI(string $type): GUIFactory
    {
        if ($type != self::MAC_GUI && $type != self::WINDOWS_GUI && $type != self::UBUNTU_GUI)
            throw new Exception('Operation system type not found!');

        return new $type();
    }
}