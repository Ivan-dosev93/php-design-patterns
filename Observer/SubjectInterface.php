<?php


namespace Observer;


interface SubjectInterface
{
    public function registerObserver(ObserverInterface $observer):void;

    public function removeObserver(ObserverInterface $observer):void;

    public function notifyObservers():void;
}