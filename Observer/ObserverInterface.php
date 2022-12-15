<?php


namespace Observer;


interface ObserverInterface
{
    public function update(float $temperature, float $pressure): void;
}