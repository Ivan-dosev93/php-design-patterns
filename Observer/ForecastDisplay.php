<?php


namespace Observer;


class ForecastDisplay implements ObserverInterface, DisplayElementInterface
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
        echo " <br /> Forecast display:<br /> Temperature tomorow: " . ($this->getTemperature()) . "<br />
        Pressure:" . ($this->getPressure()) . "<br /><br />";
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
     * @return ForecastDisplay
     */
    public function setTemperature(float $temperature): ForecastDisplay
    {
        //TODO if < -273.15 throw exception...
        $this->temperature = $temperature+2;
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
     * @return ForecastDisplay
     */
    public function setPressure(float $pressure): ForecastDisplay
    {
        $this->pressure = $pressure+2;
        return $this;
    }
}