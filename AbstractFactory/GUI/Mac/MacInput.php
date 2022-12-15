<?php


namespace AbstractFactory\GUI\Mac;


use AbstractFactory\GUI\InputInterface;

class MacInput implements InputInterface
{
    public function __construct()
    {
    }

    public function printInput(): void
    {
        echo "MacInput </br>";
    }

    public function enterText(): void
    {
        echo "Text entered call Mac logic. </br>";
    }
}