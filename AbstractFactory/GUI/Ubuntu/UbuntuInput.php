<?php


namespace AbstractFactory\GUI\Ubuntu;


use AbstractFactory\GUI\InputInterface;

class UbuntuInput implements InputInterface
{
    public function __construct()
    {
    }

    public function printInput(): void
    {
        echo "UbuntuInput </br>";
    }

    public function enterText(): void
    {
        echo "Text entered call Ubuntu logic. </br>";
    }
}