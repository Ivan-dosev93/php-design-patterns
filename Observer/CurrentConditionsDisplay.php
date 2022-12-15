<?php


namespace Observer;


class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var SubjectInterface
     */
    private $weatherData;

    /**
     * @var float
     */
    private $temperature = 0;

    /**
     * @var float
     */
    private $pressure = 0;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $pressure): void
    {
        $this->setTemperature($temperature);
        $this->setPressure($pressure);
        $this->display();
    }

    public function display(): void
    {
        echo " <br /> Current conditions display:<br /> Temperature: " . $this->getTemperature() . "<br />
        Pressure:" . $this->getPressure() . "<br /><br />";
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @param float $temperature
     * @return CurrentConditionsDisplay
     */
    public function setTemperature(float $temperature): CurrentConditionsDisplay
    {
        //TODO if < -273.15 throw exception...
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }

    /**
     * @param float $pressure
     * @return CurrentConditionsDisplay
     */
    public function setPressure(float $pressure): CurrentConditionsDisplay
    {
        $this->pressure = $pressure;
        return $this;
    }
}