<?php


namespace AbstractFactory\GUI;


interface InputInterface
{
    public function printInput(): void;

    public function enterText(): void;
}