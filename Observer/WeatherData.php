<?php


namespace Observer;


class WeatherData implements SubjectInterface
{
    /**
     * @var float
     */
    private $temperature = 0;

    /**
     * @var float
     */
    private $pressure = 0;

    /**
     * @var array
     */
    private $observers = [];

    public function __construct()
    {
    }

    public function registerObserver(ObserverInterface $observer): void
    {
        foreach ($this->observers as $ob) {
            if ($ob === $observer)
                return;
        }

        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        foreach ($this->observers as $key => $ob) {
            if ($ob === $observer) {
                unset($this->observers[$key]);
                $this->observers = array_values($this->observers);
                break;
            }
        }
    }

    public function notifyObservers(): void
    {
        /**
         * @var ObserverInterface $observer
         */
        foreach ($this->observers as $observer) {
            $observer->update($this->getTemperature(), $this->getPressure());
        }
    }

    private function measurementsChanged(): void
    {
        $this->notifyObservers();
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
     * @return WeatherData
     */
    private function setTemperature(float $temperature): WeatherData
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
     * @return WeatherData
     */
    private function setPressure(float $pressure): WeatherData
    {
        $this->pressure = $pressure;
        return $this;
    }

    public function setMeasurements(float $temperature, float $pressure)
    {
        $this->setTemperature($temperature);
        $this->setPressure($pressure);
        $this->measurementsChanged();
    }
}