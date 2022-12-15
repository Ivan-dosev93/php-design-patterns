<?php


namespace AbstractFactory\Factory;


use AbstractFactory\GUI\ButtonInterface;
use AbstractFactory\GUI\InputInterface;

interface GUIFactory
{
    public function createButton(): ButtonInterface;

    public function createInput(): InputInterface;
}